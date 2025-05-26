<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Mail\QuoteFormAdminMail;
use App\Mail\QuoteFormUserMail;
use App\Models\Contact;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class FormSubmissionController extends Controller
{
    public function submitContactForm(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:255',
            'zipcode' => 'required|integer',
            'subject' => 'required|string|max:255',
            'message' => 'required',
        ];

        // If captcha is used
        // if (config('captcha.version') !== 'no_captcha') {
        //     $rules['g-recaptcha-response'] = 'required|captcha';
        // } else {
        //     $rules['g-recaptcha-response'] = 'nullable';
        // }

        $validate = Validator::make($request->all(), $rules);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->zipcode = $request->zipcode;
            $contact->subject = $request->subject;
            $contact->message = $request->message;
            $contact->save();

            $admins = User::role(['admin', 'super-admin'])->get();
            app('notificationService')->notifyUsers($admins, 'A contact form has been submitted by '.$request->name);

            // Send mail to admin
            $companyEmail = Helper::getCompanyEmail();
            // dd($companyEmail);
            if ($companyEmail !== null) {
                try {
                    Mail::to($companyEmail)->send(new ContactFormMail($contact));
                } catch (\Throwable $th) {
                    Log::info($th->getMessage());
                    // throw $th;
                }
            }

            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while sending your message. Please try again later.');
        }
    }
    public function submitQuoteForm(Request $request)
    {
        $rules = [
            'pickup_location' => 'required|string|max:255',
            'delivery_location' => 'required|string|max:255',
            'zip_code' => 'nullable|integer',
            // 'weight' => 'nullable|string|max:255',
            // 'dimension' => 'nullable|string|max:255',
            'delivery_details' => 'nullable|string',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:255',
            'message' => 'nullable|string',
        ];

        // If captcha is used
        // if (config('captcha.version') !== 'no_captcha') {
        //     $rules['g-recaptcha-response'] = 'required|captcha';
        // } else {
        //     $rules['g-recaptcha-response'] = 'nullable';
        // }

        $validate = Validator::make($request->all(), $rules);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            $quote = new Quote();
            $quote->pickup_location = $request->pickup_location;
            $quote->delivery_location = $request->delivery_location;
            $quote->zip_code = $request->zip_code;
            // $quote->weight = $request->weight;
            // $quote->dimension = $request->dimension;
            $quote->delivery_details = $request->delivery_details;
            $quote->name = $request->name;
            $quote->email = $request->email;
            $quote->phone = $request->phone;
            $quote->message = $request->message;
            $quote->save();

            $admins = User::role(['admin', 'super-admin'])->get();
            app('notificationService')->notifyUsers($admins, 'A Quote has been submitted by '.$request->name);

            // Send mail to admin
            $companyEmail = Helper::getCompanyEmail();
            // dd($companyEmail);
            try {
                Mail::to($quote->email)->send(new QuoteFormUserMail($quote));
            } catch (\Throwable $th) {
                Log::info($th->getMessage());
                // throw $th;
            }
            if ($companyEmail !== null) {
                try {
                    Mail::to($companyEmail)->send(new QuoteFormAdminMail($quote));
                } catch (\Throwable $th) {
                    Log::info($th->getMessage());
                    // throw $th;
                }
            }

            return redirect()->back()->with('success', 'Your Quote has been submitted successfully!');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while sending your message. Please try again later.');
        }
    }
}
