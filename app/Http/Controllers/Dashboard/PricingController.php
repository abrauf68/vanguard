<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\PackageItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view pricing');
        try {
            $packages = Package::get();
            return view('dashboard.package.index', compact('packages'));
        } catch (\Throwable $th) {
            Log::error('Packages Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create pricing');
        try {
            return view('dashboard.package.create');
        } catch (\Throwable $th) {
            Log::error('Package Create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create pricing');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'type' => 'required|string|max:255',
            'item' => 'required|array',
            'item.*' => 'string|max:255',
            'item_type' => 'required|array',
            'item_type.*' => 'in:checked,crossed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $package = new Package();
            $package->name = $request->name;
            $package->price = $request->price;
            $package->type = $request->type;
            $package->save();

            if ($request->has('item')) {
                foreach ($request->item as $key => $value) {
                    $packageItem = new PackageItem();
                    $packageItem->package_id = $package->id;
                    $packageItem->item = $value;
                    $packageItem->item_type = $request->item_type[$key];
                    $packageItem->save();
                }
            }

            DB::commit();
            return redirect()->route('dashboard.pricing.index')->with('success', 'Package Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Package Store Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('update pricing');
        try {
            $package = Package::with('packageItems')->findOrFail($id);
            return view('dashboard.package.edit', compact('package'));
        } catch (\Throwable $th) {
            Log::error('Package Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update pricing');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'type' => 'required|string|max:255',
            'item' => 'required|array',
            'item.*' => 'string|max:255',
            'item_type' => 'required|array',
            'item_type.*' => 'in:checked,crossed',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            DB::beginTransaction();
            $package = Package::findOrFail($id);
            $package->name = $request->name;
            $package->price = $request->price;
            $package->type = $request->type;
            $package->save();

            if ($request->has('item')) {
                PackageItem::where('package_id', $package->id)->delete();
                foreach ($request->item as $key => $value) {
                    $packageItem = new PackageItem();
                    $packageItem->package_id = $package->id;
                    $packageItem->item = $value;
                    $packageItem->item_type = $request->item_type[$key];
                    $packageItem->save();
                }
            }

            DB::commit();
            return redirect()->route('dashboard.pricing.index')->with('success', 'Package Updated Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Package Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete pricing');
        try {
            $package = Package::findOrFail($id);
            $package->delete();
            return redirect()->route('dashboard.pricing.index')->with('success', 'Package Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Package Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(string $id)
    {
        $this->authorize('update pricing');
        try {
            $package = Package::findOrFail($id);
            $message = $package->is_active == 'active' ? 'Package Deactivated Successfully' : 'Package Activated Successfully';
            if ($package->is_active == 'active') {
                $package->is_active = 'inactive';
                $package->save();
            } else {
                $package->is_active = 'active';
                $package->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Package Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
