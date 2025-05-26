<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view team');
        try {
            $teams = Team::with('designation')->get();
            return view('dashboard.team.index', compact('teams'));
        } catch (\Throwable $th) {
            Log::error('Teams Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create team');
        try {
            $designations = Designation::where('is_active', 'active')->get();
            return view('dashboard.team.create',compact('designations'));
        } catch (\Throwable $th) {
            Log::error('Team Create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create team');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max_size',
            'designation_id' => 'required|exists:designations,id',
            'description' => 'required|string|max:255',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $team = new Team();
            $team->name = $request->name;
            $team->designation_id = $request->designation_id;
            $team->description = $request->description;
            $team->facebook = $request->facebook;
            $team->instagram = $request->instagram;
            $team->linkedin = $request->linkedin;
            $team->twitter = $request->twitter;
            $team->is_active = 'active';


            if ($request->hasFile('image')) {
                $Image = $request->file('image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_team_image.' . $Image_ext;

                $Image_path = 'uploads/company/team';
                $Image->move(public_path($Image_path), $Image_name);
                $team->image = $Image_path . "/" . $Image_name;
            }

            $team->save();

            DB::commit();
            return redirect()->route('dashboard.team.index')->with('success', 'Team Member Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Team Member Store Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('update team');
        try {
            $team = Team::findOrFail($id);
            $designations = Designation::where('is_active', 'active')->get();
            return view('dashboard.team.edit', compact('team', 'designations'));
        } catch (\Throwable $th) {
            Log::error('Team Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update team');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max_size',
            'designation_id' => 'required|exists:designations,id',
            'description' => 'required|string|max:255',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            DB::beginTransaction();

            $team = Team::findOrFail($id);
            $team->name = $request->name;
            $team->designation_id = $request->designation_id;
            $team->description = $request->description;
            $team->facebook = $request->facebook;
            $team->instagram = $request->instagram;
            $team->linkedin = $request->linkedin;
            $team->twitter = $request->twitter;

            if ($request->hasFile('image')) {
                if (isset($team->image) && File::exists(public_path($team->image))) {
                    File::delete(public_path($team->image));
                }
                $Image = $request->file('image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_team_image.' . $Image_ext;

                $Image_path = 'uploads/company/team';
                $Image->move(public_path($Image_path), $Image_name);
                $team->image = $Image_path . "/" . $Image_name;
            }

            $team->save();

            DB::commit();
            return redirect()->route('dashboard.team.index')->with('success', 'Team Member Updated Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Team Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete team');
        try {
            $team = Team::findOrFail($id);
            if (isset($team->image) && File::exists(public_path($team->image))) {
                File::delete(public_path($team->image));
            }
            $team->delete();
            return redirect()->route('dashboard.team.index')->with('success', 'Team Member Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Team Deletion Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(string $id)
    {
        $this->authorize('update team');
        try {
            $team = Team::findOrFail($id);
            $message = $team->is_active == 'active' ? 'Team Member Deactivated Successfully' : 'Team Member Activated Successfully';
            if ($team->is_active == 'active') {
                $team->is_active = 'inactive';
                $team->save();
            } else {
                $team->is_active = 'active';
                $team->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Team Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
