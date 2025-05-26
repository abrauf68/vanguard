<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $pendingQuotes = Quote::where('status', 'pending')->count();
            $inprogressQuotes = Quote::where('status', 'in_progress')->count();
            $approvedQuotes = Quote::where('status', 'approved')->count();
            $rejectedQuotes = Quote::where('status', 'rejected')->count();
            $completedQuotes = Quote::where('status', 'completed')->count();
            $totalQuotes = Quote::count();
            $totalUsers = User::count();
            $totalDeactivatedUsers = User::where('is_active', 'inactive')->count();
            $totalActiveUsers = User::where('is_active', 'active')->count();
            $totalUnverifiedUsers = User::where('email_verified_at', null)->count();
            $totalArchivedUsers = User::onlyTrashed()->count();
            return view('dashboard.index',compact('pendingQuotes','inprogressQuotes','approvedQuotes','rejectedQuotes','completedQuotes','totalQuotes','totalUsers','totalDeactivatedUsers','totalActiveUsers','totalUnverifiedUsers','totalArchivedUsers'));
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Something went wrong! Please try again later.');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
