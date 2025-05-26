<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view testimonial');
        try {
            $testimonials = Testimonial::get();
            return view('dashboard.testimonial.index', compact('testimonials'));
        } catch (\Throwable $th) {
            Log::error('Testimonials Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create testimonial');
        try {
            return view('dashboard.testimonial.create');
        } catch (\Throwable $th) {
            Log::error('Testimonials Create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create testimonial');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max_size',
            'position' => 'required|string|max:255',
            'review_count' => 'required|integer|min:0|max:5',
            'review' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $testimonial = new Testimonial();
            $testimonial->name = $request->name;
            $testimonial->position = $request->position;
            $testimonial->review_count = $request->review_count;
            $testimonial->review = $request->review;


            if ($request->hasFile('image')) {
                $Image = $request->file('image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_testimonial_image.' . $Image_ext;

                $Image_path = 'uploads/company/testimonials';
                $Image->move(public_path($Image_path), $Image_name);
                $testimonial->image = $Image_path . "/" . $Image_name;
            }

            $testimonial->save();

            DB::commit();
            return redirect()->route('dashboard.testimonials.index')->with('success', 'Testimonial Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Testimonial Store Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('update testimonial');
        try {
            $testimonial = Testimonial::findOrFail($id);
            return view('dashboard.testimonial.edit', compact('testimonial'));
        } catch (\Throwable $th) {
            Log::error('Testimonial Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update testimonial');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'review_count' => 'required|integer|min:0|max:5',
            'review' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max_size',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {

            $testimonial = Testimonial::findOrFail($id);
            $testimonial->name = $request->name;
            $testimonial->position = $request->position;
            $testimonial->review_count = $request->review_count;
            $testimonial->review = $request->review;

            if ($request->hasFile('image')) {
                if (isset($testimonial->image) && File::exists(public_path($testimonial->image))) {
                    File::delete(public_path($testimonial->image));
                }
                $Image = $request->file('image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_testimonial_image.' . $Image_ext;

                $Image_path = 'uploads/company/testimonials';
                $Image->move(public_path($Image_path), $Image_name);
                $testimonial->image = $Image_path . "/" . $Image_name;
            }

            $testimonial->save();

            return redirect()->route('dashboard.testimonials.index')->with('success', 'Testimonial Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('Testimonial Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete testimonial');
        try {
            $testimonial = Testimonial::findOrFail($id);
            if (isset($testimonial->image) && File::exists(public_path($testimonial->image))) {
                File::delete(public_path($testimonial->image));
            }
            $testimonial->delete();
            return redirect()->route('dashboard.testimonials.index')->with('success', 'Testimonial Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Testimonial Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(string $id)
    {
        $this->authorize('update testimonial');
        try {
            $testimonial = Testimonial::findOrFail($id);
            $message = $testimonial->is_active == 'active' ? 'Testimonial Deactivated Successfully' : 'Testimonial Activated Successfully';
            if ($testimonial->is_active == 'active') {
                $testimonial->is_active = 'inactive';
                $testimonial->save();
            } else {
                $testimonial->is_active = 'active';
                $testimonial->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Testimonial Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
