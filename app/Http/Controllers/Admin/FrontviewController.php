<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Package;
use App\Models\BTRC;
use App\Models\TC;
use App\Models\CompanyInfo;

class FrontviewController extends Controller
{

    public function index(){
        $packages = Package::where('status', 1)->where('top_package','1')->get();
        $company_info = CompanyInfo::first();
        return view('frontend.home.index',compact('packages','company_info'));
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
        $company_info = CompanyInfo::first();
        return view('frontend.about.about', compact('company_info'));
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








    public function custom(){
        return view('frontend.custom.test');
    }
}
