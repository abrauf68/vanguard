<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CompanyService;
use App\Models\ServiceFeature;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function home()
    {
        try {
            $services = CompanyService::where('is_active', 'active')->get();
            return view('frontend.home', compact('services'));
        } catch (\Throwable $th) {
            Log::error('Home View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    public function about()
    {
        try {
            $teams = Team::with('designation')->where('is_active', 'active')->get();
            return view('frontend.about',compact('teams'));
        } catch (\Throwable $th) {
            Log::error('About View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    public function services($slug = null)
    {
        try {
            if($slug !== null){
                $service = CompanyService::where('slug', $slug)->first();
                if($service->is_active !== 'active'){
                    return redirect()->back()->with('message', "This service has been deactivated!");
                }
                $allServices = CompanyService::where('is_active', 'active')->get();
                return view('frontend.service_details', compact('service','allServices'));
            }else{
                $services = CompanyService::where('is_active', 'active')->get();
                return view('frontend.services', compact('services'));
            }
        } catch (\Throwable $th) {
            Log::error('Services View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    
     public function features($slug = null)
    {
        try {
            if($slug !== null){
                $feature = ServiceFeature::where('slug', $slug)->first();
                if($feature->is_active !== 'active'){
                    return redirect()->back()->with('message', "This feature has been deactivated!");
                }
                $allFeatures = ServiceFeature::where('is_active', 'active')->get();
                return view('frontend.feature_details', compact('feature','allFeatures'));
            }else{
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            Log::error('Services View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    public function pricing()
    {
        try {
            return view('frontend.pricing');
        } catch (\Throwable $th) {
            Log::error('Pricing View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    public function contact()
    {
        try {
            return view('frontend.contact');
        } catch (\Throwable $th) {
            Log::error('Contact View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    public function getAQuote()
    {
        try {
            return view('frontend.get-a-quote');
        } catch (\Throwable $th) {
            Log::error('Get A Quote View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    public function serviceDetails()
    {
        try {
            return view('frontend.service_details');
        } catch (\Throwable $th) {
            Log::error('Service Details View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
