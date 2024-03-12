<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Package;
use App\Models\BTRC;
use App\Models\TC;
use App\Models\CompanyInfo;
use App\Models\Slider;
use App\Models\Counter;
use App\Models\ChooseUs;
use App\Models\Client;
use App\Models\Service;
use App\Models\PaymentCategory;
use App\Models\Payment;
use App\Models\Mission;
use App\Models\Vision;
use App\Models\Faq;

class FrontviewController extends Controller
{

    public function index(){
        $packages = Package::where('status', 1)->where('top_package','1')->get();
        $sliders = Slider::where('status', 1)->orderBy('position','asc')->get();
        $counters = Counter::where('status', 1)->orderBy('position','asc')->get();
        $choose_uses = ChooseUs::where('status', 1)->orderBy('position','asc')->get();
        $clients = Client::where('status', 1)->orderBy('position','asc')->get();
        $services = Service::where('status', 1)->orderBy('position','asc')->get();
        $company_info = CompanyInfo::first();
        return view('frontend.home.index',compact('packages','company_info','sliders','counters','choose_uses','clients','services'));
    }

    public function campaignDetails($id){
        $company_info = CompanyInfo::first();
        $campaign_details = Slider::where('id',$id)->where('status','1')->first();
        return view('frontend.discount.campaign_details',compact('company_info','campaign_details'));
    }

    public function contact(){
        $company_info = CompanyInfo::first();
        return view('frontend.contact.contact', compact('company_info'));
    }
    public function packages(){
        $company_info = CompanyInfo::first();
        $packages = Package::where('status','1')->get();
        return view('frontend.packages.packages',compact('packages','company_info'));
    }
    public function about(){
        $mission = Mission::first();
        $vision = Vision::first();
        $faq = Faq::first();
        $company_info = CompanyInfo::first();
        return view('frontend.about.about', compact('company_info','mission','vision','faq'));
    }
    public function btrc(){
        $company_info = CompanyInfo::first();
        $btrc = BTRC::first();
        return view('frontend.btrc.btrc',compact('btrc', 'company_info'));
    }

    public function buyPackage($id)
    {
        $company_info = CompanyInfo::first();
        $package_buy = Package::where('id', $id)->where('status', 1)->first();
    
        return view('frontend.packages.package_buy', [
            'package_buy' => $package_buy,
            'company_info' => $company_info
        ]);
    }

    public function termsCondition()
    {
        $company_info = CompanyInfo::first();
        $tc = TC::first();
        return view('frontend.tc.tc',compact('tc', 'company_info'));
    }

    public function paymentProcess(){
        $company_info = CompanyInfo::first();
        $bkash_payment = Payment::where('status', 1)->where('payment_category_id', 2)->first();
        $rocket_payment = Payment::where('status', 1)->where('payment_category_id', 3)->first();
        $nagad_payment = Payment::where('status', 1)->where('payment_category_id', 4)->first();
        $category = PaymentCategory::where('status', 1)->get();
        return view('frontend.payment_process.payment_process', compact('company_info', 'category','bkash_payment','rocket_payment','nagad_payment'));
    }








    public function custom(){
        return view('frontend.custom.test');
    }
}
