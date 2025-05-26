<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view quote');
        try {
            $quotes = Quote::latest()->get();
            return view('dashboard.quote.index', compact('quotes'));
        } catch (\Throwable $th) {
            Log::error('Quotes Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
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
        try {
            $quote = Quote::findOrFail($id);
            return view('dashboard.quote.show', compact('quote'));
        } catch (\Throwable $th) {
            Log::error('Quote Show Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
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
        $this->authorize('delete quote');
        try {
            $quote = Quote::findOrFail($id);
            $quote->delete();
            return redirect()->back()->with('success', "Quote Deleted Successfully");
        } catch (\Throwable $th) {
            Log::error('Quote Deletion Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(Request $request)
    {
        $this->authorize('update quote');
        $validator = Validator::make($request->all(), [
            'quote_id' => 'required|exists:quotes,id',
            'status' => 'required|in:pending,in_progress,approved,rejected,completed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first()
            ], 422);
        }
        try {
            $quote = Quote::findOrFail($request->quote_id);
            $quote->status = $request->status;
            $quote->save();
            return response()->json([
                'success' => true,
                'message' => 'Quote Status Updated Successfully'
            ], 200);
        } catch (\Throwable $th) {
            Log::error('Quote Status Updation Failed', ['error' => $th->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Please try again later'
            ], 500);
            throw $th;
        }
    }
}
