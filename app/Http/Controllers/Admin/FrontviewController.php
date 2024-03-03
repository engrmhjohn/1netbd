<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Package;
use App\Models\BTRC;
use App\Models\TC;

class FrontviewController extends Controller
{

    public function index(){
        $packages = Package::where('status', 1)->where('top_package','1')->get();
        return view('frontend.home.index',compact('packages'));
    }

    public function contact(){
        return view('frontend.contact.contact');
    }
    public function packages(){
        $packages = Package::where('status','1')->get();
        return view('frontend.packages.packages',compact('packages'));
    }
    public function about(){
        return view('frontend.about.about');
    }
    public function btrc(){
        $btrc = BTRC::first();
        return view('frontend.btrc.btrc',compact('btrc'));
    }

    public function buyPackage($id)
    {
        $package_buy = Package::where('id', $id)->where('status', 1)->first();
    
        return view('frontend.packages.package_buy', [
            'package_buy' => $package_buy
        ]);
    }

    public function termsCondition()
    {
        $tc = TC::first();
        return view('frontend.tc.tc',compact('tc'));
    }








    public function custom(){
        return view('frontend.custom.test');
    }
}
