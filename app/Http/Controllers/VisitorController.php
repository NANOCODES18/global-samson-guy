<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sitesetting;
use App\Models\Investmentplan;
use App\Models\Faq;
use Illuminate\Support\Facades\Mail;
use App\Mail\Adminmail;
use App\Models\Feature;


class VisitorController extends Controller
{

   public $owneremail ="forexa0001@gmail.com";
    //
 

public function about()
{
    // Your controller logic goes here
    // For example, you can fetch data from the database or perform any other actions required for this view.

    $data = []; // An associative array to pass data to the view
    $data['title'] = "about";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.about", $data);
}


public function blog()
{
    // Your controller logic goes here
    // For example, you can fetch data from the database or perform any other actions required for this view.

    $data = []; // An associative array to pass data to the view
    $data['title'] = "blog";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.blog", $data);
}


public function contact()
{
    // Your controller logic goes here
    // For example, you can fetch data from the database or perform any other actions required for this view.

    $data = []; // An associative array to pass data to the view
    $data['title'] = "contact";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.contact", $data);
}


public function faq()
{
    // Your controller logic goes here
    // For example, you can fetch data from the database or perform any other actions required for this view.

    $data = []; // An associative array to pass data to the view
    $data['title'] = "faq";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.faq", $data);
}


public function index()
{
    // Your controller logic goes here
    // For example, you can fetch data from the database or perform any other actions required for this view.

    $data = []; // An associative array to pass data to the view
    $data['title'] = "index";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.index", $data);
}


public function invest()
{
    // Your controller logic goes here
    // For example, you can fetch data from the database or perform any other actions required for this view.

    $data = []; // An associative array to pass data to the view
    $data['title'] = "invest";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.invest", $data);
}


public function terms()
{
    // Your controller logic goes here
    // For example, you can fetch data from the database or perform any other actions required for this view.

    $data = []; // An associative array to pass data to the view
    $data['title'] = "terms";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.terms", $data);
}


public function testimony()
{
    // Your controller logic goes here
    // For example, you can fetch data from the database or perform any other actions required for this view.

    $data = []; // An associative array to pass data to the view
    $data['title'] = "testimony";

    // Sample data for illustration purposes (replace this with your actual data retrieval code)
    $inv_plans = Investmentplan::all();
    $faqs = Faq::all();
    $company_detail = Sitesetting::where('id', 1)->first();
    $company_features = Feature::where('id', 1)->first();
    $data['company_features'] = $company_detail;
    $data['company_detail'] = $company_features;
    $data['compd'] = $company_detail;
    $data['investmentplans'] = $inv_plans;
    $data['faqs'] = $faqs;

    return view("visitors.testimony", $data);
}
}
