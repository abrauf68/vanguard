<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view faq');
        try {
            $faqs = Faq::get();
            return view('dashboard.faq.index', compact('faqs'));
        } catch (\Throwable $th) {
            Log::error('Faqs Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create faq');
        try {
            return view('dashboard.faq.create');
        } catch (\Throwable $th) {
            Log::error('Faqs Create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create faq');
        $validator = Validator::make($request->all(), [
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $faq = new Faq();
            $faq->question = $request->question;
            $faq->answer = $request->answer;
            $faq->save();

            DB::commit();
            return redirect()->route('dashboard.faqs.index')->with('success', 'FAQ Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('FAQ Store Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('update faq');
        try {
            $faq = Faq::findOrFail($id);
            return view('dashboard.faq.edit', compact('faq'));
        } catch (\Throwable $th) {
            Log::error('FAQ Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update faq');
        $validator = Validator::make($request->all(), [
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $faq = Faq::findOrFail($id);
            $faq->question = $request->question;
            $faq->answer = $request->answer;
            $faq->save();

            return redirect()->route('dashboard.faqs.index')->with('success', 'FAQ Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('FAQ Updated Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete faq');
        try {
            $faq = Faq::findOrFail($id);
            $faq->delete();
            return redirect()->route('dashboard.faqs.index')->with('success', 'FAQ Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('FAQ Deleted Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(string $id)
    {
        $this->authorize('update faq');
        try {
            $faq = Faq::findOrFail($id);
            $message = $faq->is_active == 'active' ? 'FAQ Deactivated Successfully' : 'FAQ Activated Successfully';
            if ($faq->is_active == 'active') {
                $faq->is_active = 'inactive';
                $faq->save();
            } else {
                $faq->is_active = 'active';
                $faq->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('FAQ Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
