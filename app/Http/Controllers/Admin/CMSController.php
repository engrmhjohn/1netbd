<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
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

use Illuminate\Support\Facades\Hash;

use Auth;

require_once app_path('Helper/image.php');

class CMSController extends Controller
{

    public function updateUserName(Request $request)
    {
        $user_info               = User::find($request->id);
        $user_info->name = $request->name;
        $user_info->save();
        return redirect(route('admin.profile_admin'))->with('message', 'User Full Name Successfully Updated!');
    }
    public function updateUserPhone(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|unique:users,phone',
        ]);
        
        $user_info               = User::find($request->id);
        $user_info->phone = $request->phone;
        $user_info->save();
        return redirect(route('admin.profile_admin'))->with('message', 'User Phone Successfully Updated!');
    }

    public function updateUserEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|string|unique:users,email',
        ]);
        
        $user_info               = User::find($request->id);
        $user_info->email = $request->email;
        $user_info->save();
        return redirect(route('admin.profile_admin'))->with('message', 'User Email Successfully Updated!');
    }

    public function updateUserUsername(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:users,username',
        ]);
        
        $user_info               = User::find($request->id);
        $user_info->username = $request->username;
        $user_info->save();
        return redirect(route('admin.profile_admin'))->with('message', 'User Username Successfully Updated!');
    }

    public function updateUserPhoto(Request $request)
    {
        $user_info               = User::find($request->id);
        if ($request->file('profile_photo_path')) {
            if (isset($user_info)) {
                delete_image($user_info->profile_photo_path);
                $user_info->delete();
            }
            $user_info->profile_photo_path = image_upload($request->profile_photo_path);
        }
        $user_info->save();
        return redirect(route('admin.profile_admin'))->with('message', 'Profile Photo Successfully Updated!');
    }

    public function updateUserPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed', // Ensure password and password_confirmation match
        ]);

        $user_info = User::find($request->id);
        $user_info->password = Hash::make($request->password);
        $user_info->save();

        return redirect(route('admin.profile_admin'))->with('message', 'Password successfully updated!');
    }

    public function addPackage()
    {
        return view('backend.cms.package.show');
    }
    public function savePackage(Request $request)
    {
        $package = new Package();
        $package->en_package_name = $request->en_package_name;
        $package->en_amount_label = $request->en_amount_label;
        $package->en_amount = $request->en_amount;
        $package->en_mbps_value = $request->en_mbps_value;
        $package->en_short_info_one = $request->en_short_info_one;
        $package->en_short_info_two = $request->en_short_info_two;
        $package->en_short_info_three = $request->en_short_info_three;
        $package->en_short_info_four = $request->en_short_info_four;
        $package->en_short_info_five = $request->en_short_info_five;
        $package->en_short_info_six = $request->en_short_info_six;
        $package->en_short_info_seven = $request->en_short_info_seven;
        $package->en_short_info_eight = $request->en_short_info_eight;
        $package->en_short_info_nine = $request->en_short_info_nine;
        $package->en_short_info_ten = $request->en_short_info_ten;
        $package->en_button_text = $request->en_button_text;
        $package->en_otc_amount = $request->en_otc_amount;
        $package->en_discount_otc = $request->en_discount_otc;
        $package->en_discount_monthly_fee = $request->en_discount_monthly_fee;
        $package->top_package = $request->top_package;
        $package->status = $request->status;
        $package->save();
        return redirect(route('admin.manage_package'))->with('message', 'Successfully Added!');
    }
    public function managePackage()
    {
        return view('backend.cms.package.index',[
            'packages' => Package::get(),
        ]);
    }
    public function editPackage($id)
    {
        $package = Package::find($id);

        return view('backend.cms.package.edit', [
            'package' => $package
        ]);
    }
    public function updatePackage(Request $request)
    {
        $package               = Package::find($request->package_id);
        $package->en_package_name = $request->en_package_name;
        $package->en_amount_label = $request->en_amount_label;
        $package->en_amount = $request->en_amount;
        $package->en_mbps_value = $request->en_mbps_value;
        $package->en_short_info_one = $request->en_short_info_one;
        $package->en_short_info_two = $request->en_short_info_two;
        $package->en_short_info_three = $request->en_short_info_three;
        $package->en_short_info_four = $request->en_short_info_four;
        $package->en_short_info_five = $request->en_short_info_five;
        $package->en_short_info_six = $request->en_short_info_six;
        $package->en_short_info_seven = $request->en_short_info_seven;
        $package->en_short_info_eight = $request->en_short_info_eight;
        $package->en_short_info_nine = $request->en_short_info_nine;
        $package->en_short_info_ten = $request->en_short_info_ten;
        $package->en_button_text = $request->en_button_text;
        $package->en_otc_amount = $request->en_otc_amount;
        $package->en_discount_otc = $request->en_discount_otc;
        $package->en_discount_monthly_fee = $request->en_discount_monthly_fee;
        $package->top_package = $request->top_package;
        $package->status = $request->status;
        $package->save();
        return redirect(route('admin.manage_package'))->with('message', 'Successfully Updated!');
    }

    public function deletePackage(Request $request)
    {
        $package = Package::find($request->package_id);

        if (!$package) {
            return redirect()->route('admin.manage_package')->with('error', 'Package not found.');
        }

        $package->delete();

        return redirect()->route('admin.manage_package')->with('message', 'Successfully Deleted!');
    }

    public function addbtrcApprovedPackage(){
        return view('backend.cms.btrc.show');
    }

    public function savebtrcApprovedPackage(Request $request){
        $btrc = new BTRC();
        $btrc->document = document_upload($request->document);
        $btrc->save();

        return redirect()->route('admin.manage_btrc_approved_packages')->with('message', 'Successfully Added!'); 
    }

    public function managebtrcApprovedPackage()
    {
        return view('backend.cms.btrc.index',[
            'btrc' => BTRC::get(),
        ]);
    }

    public function editbtrcApprovedPackage($id)
    {
        $btrc = BTRC::find($id);

        return view('backend.cms.btrc.edit', [
            'btrc' => $btrc
        ]);
    }

    public function updatebtrcApprovedPackage(Request $request)
    {
        $btrc               = BTRC::find($request->btrc_id);
        if ($request->file('document')) {
            if (isset($btrc)) {
                delete_image($btrc->document);
                $btrc->delete();
            }
            $btrc->document = document_upload($request->document);
        }
        $btrc->save();
        return redirect(route('admin.manage_btrc_approved_packages'))->with('message', 'Successfully Updated!');
    }

    public function addTC()
    {
        return view('backend.cms.tc.show');
    }
    public function saveTC(Request $request)
    {
        $tc = new TC();
        $tc->en_title = $request->en_title;
        $tc->en_payment_mode = $request->en_payment_mode;
        $tc->en_documentation = $request->en_documentation;
        $tc->en_after_sales_service = $request->en_after_sales_service;
        $tc->en_client_responsibility = $request->en_client_responsibility;
        $tc->en_others = $request->en_others;
        $tc->en_contact_termination = $request->en_contact_termination;
        $tc->save();
        return redirect(route('admin.manage_tc'))->with('message', 'Successfully Added!');
    }
    public function manageTC()
    {
        return view('backend.cms.tc.index', [
            'tc' => TC::get(),
        ]);
    }
    public function editTC($id)
    {
        $tc = TC::find($id);

        return view('backend.cms.tc.edit', [
            'tc' => $tc
        ]);
    }
    public function updateTC(Request $request)
    {
        $tc               = TC::find($request->tc_id);
        $tc->en_title = $request->en_title;
        $tc->en_payment_mode = $request->en_payment_mode;
        $tc->en_documentation = $request->en_documentation;
        $tc->en_after_sales_service = $request->en_after_sales_service;
        $tc->en_client_responsibility = $request->en_client_responsibility;
        $tc->en_others = $request->en_others;
        $tc->en_contact_termination = $request->en_contact_termination;
        $tc->save();
        return redirect(route('admin.manage_tc'))->with('message', 'Successfully Updated!');
    }

    public function addCompanyInfo(){
        return view('backend.cms.company_info.show');
    }

    public function saveCompanyInfo(Request $request){
        $company_info = new CompanyInfo();
        $company_info->en_name = $request->en_name;
        $company_info->en_hotline = $request->en_hotline;
        $company_info->en_sales_number = $request->en_sales_number;
        $company_info->email = $request->email;
        $company_info->fb_link = $request->fb_link;
        $company_info->youtube_link = $request->youtube_link;
        $company_info->linkedin_link = $request->linkedin_link;
        $company_info->map_link = $request->map_link;
        $company_info->en_address = $request->en_address;
        $company_info->en_working_hours = $request->en_working_hours;
        $company_info->color_logo = image_upload($request->color_logo);
        $company_info->white_logo = image_upload($request->white_logo);
        $company_info->save();
        return redirect(route('admin.manage_company_info'))->with('message','Successfully Added');
    }

    public function manageCompanyInfo(){
        $company_info = CompanyInfo::get();
        return view('backend.cms.company_info.index',compact('company_info'));
    }

    public function editCompanyInfo($id){
        $company_info = CompanyInfo::find($id);
        return view('backend.cms.company_info.edit',compact('company_info'));
    }

    public function updateCompanyInfo(Request $request){
       $company_info = CompanyInfo::find($request->company_info_id);
       $company_info->en_name = $request->en_name;
       $company_info->en_hotline = $request->en_hotline;
       $company_info->en_sales_number = $request->en_sales_number;
       $company_info->email = $request->email;
       $company_info->fb_link = $request->fb_link;
       $company_info->youtube_link = $request->youtube_link;
       $company_info->linkedin_link = $request->linkedin_link;
       $company_info->map_link = $request->map_link;
       $company_info->en_address = $request->en_address;
       $company_info->en_working_hours = $request->en_working_hours;
        if ($request->file('color_logo')) {
            if (isset($company_info)) {
                delete_image($company_info->color_logo);
                $company_info->delete();
            }
            $company_info->color_logo = image_upload($request->color_logo);
        }
        if ($request->file('white_logo')) {
            if (isset($company_info)) {
                delete_image($company_info->white_logo);
                $company_info->delete();
            }
            $company_info->white_logo = image_upload($request->white_logo);
        }
       $company_info->save();
       return redirect(route('admin.manage_company_info'))->with('message','Successfully Updated'); 
    }

    public function addSlider()
    {
        return view('backend.cms.slider.show');
    }
    public function saveSlider(Request $request)
    {
        $slider = new Slider();
        $slider->desktop_image = image_upload($request->desktop_image);
        $slider->mobile_image = image_upload($request->mobile_image);
        $slider->en_description = $request->en_description;
        $slider->offer_last_date = $request->offer_last_date;
        $slider->position = $request->position;
        $slider->website_link = $request->website_link;
        $slider->button_text = $request->button_text;
        $slider->status = $request->status;
        $slider->save();
        return redirect(route('admin.manage_slider'))->with('message', 'Successfully Added!');
    }
    public function manageSlider()
    {
        return view('backend.cms.slider.index', [
            'slider' => Slider::orderBy('position','asc')->get(),
        ]);
    }
    public function editSlider($id)
    {
        $slider = Slider::find($id);

        return view('backend.cms.slider.edit', [
            'slider' => $slider
        ]);
    }
    public function updateSlider(Request $request)
    {
        $slider               = Slider::find($request->slider_id);
        $slider->en_description = $request->en_description;
        $slider->offer_last_date = $request->offer_last_date;
        $slider->position = $request->position;
        $slider->website_link = $request->website_link;
        $slider->button_text = $request->button_text;
        $slider->status = $request->status;
        if ($request->file('desktop_image')) {
            if (isset($slider)) {
                delete_image($slider->desktop_image);
                $slider->delete();
            }
            $slider->desktop_image = image_upload($request->desktop_image);
        }
        if ($request->file('mobile_image')) {
            if (isset($slider)) {
                delete_image($slider->mobile_image);
                $slider->delete();
            }
            $slider->mobile_image = image_upload($request->mobile_image);
        }
        $slider->save();
        return redirect(route('admin.manage_slider'))->with('message', 'Successfully Updated!');
    }
    public function deleteSlider(Request $request)
    {
        $slider = Slider::find($request->slider_id);

        if (isset($slider)) {
            delete_image($slider->desktop_image);
            $slider->delete();
        }
        if (isset($slider)) {
            delete_image($slider->mobile_image);
            $slider->delete();
        }
        $slider->delete();

        return redirect()->route('admin.manage_slider')->with('message', 'Successfully Deleted!');
    }

    public function addCounter(){
        return view('backend.cms.counter.show');
    }

    public function saveCounter(Request $request){
        $counter = new Counter();
        $counter->en_name = $request->en_name;
        $counter->en_number = $request->en_number;
        $counter->icon = image_upload($request->icon);
        $counter->position = $request->position;
        $counter->status = $request->status;
        $counter->save();
        return redirect(route('admin.manage_counter'))->with('message', 'Successfully Added!');
    }

    public function manageCounter(){
        $counter = Counter::orderBy('position','asc')->get();
        return view('backend.cms.counter.index',compact('counter'));
    }

    public function editCounter($id){
        $counter = Counter::find($id);
        return view('backend.cms.counter.edit',compact('counter'));
    }

    public function updateCounter(Request $request){
        $counter               = Counter::find($request->counter_id);
        $counter->en_name = $request->en_name;
        $counter->en_number = $request->en_number;
        $counter->position = $request->position;
        $counter->status = $request->status;
        if ($request->file('icon')) {
            if (isset($counter)) {
                delete_image($counter->icon);
                $counter->delete();
            }
            $counter->icon = image_upload($request->icon);
        }
        $counter->save();
        return redirect(route('admin.manage_counter'))->with('message', 'Successfully Updated!');
    }

    public function deleteCounter(Request $request)
    {
        $counter = Counter::find($request->counter_id);

        if (isset($counter)) {
            delete_image($counter->icon);
            $counter->delete();
        }
        $counter->delete();

        return redirect()->route('admin.manage_counter')->with('message', 'Successfully Deleted!');
    }

    public function addChooseUS()
    {
        return view('backend.cms.choose_us.show');
    }
    public function saveChooseUS(Request $request)
    {
        $choose_us = new ChooseUs();
        $choose_us->en_title = $request->en_title;
        $choose_us->en_description = $request->en_description;
        $choose_us->position = $request->position;
        $choose_us->icon = image_upload($request->icon);
        $choose_us->status = $request->status;
        $choose_us->save();
        return redirect(route('admin.manage_choose_us'))->with('message', 'Successfully Added!');
    }
    public function manageChooseUS()
    {
        return view('backend.cms.choose_us.index', [
            'choose_us' => ChooseUs::orderBy('position', 'asc')->get(),
        ]);
    }
    public function editChooseUS($id)
    {
        $choose_us = ChooseUs::find($id);

        return view('backend.cms.choose_us.edit', [
            'choose_us' => $choose_us
        ]);
    }
    public function updateChooseUS(Request $request)
    {
        $choose_us               = ChooseUs::find($request->choose_us_id);
        $choose_us->en_title = $request->en_title;
        $choose_us->en_description = $request->en_description;
        $choose_us->position = $request->position;
        $choose_us->status = $request->status;
        if ($request->file('icon')) {
            if (isset($choose_us)) {
                delete_image($choose_us->icon);
                $choose_us->delete();
            }    
            $choose_us->icon = image_upload($request->icon);
        }
        $choose_us->save();
        return redirect(route('admin.manage_choose_us'))->with('message', 'Successfully Updated!');
    }
    public function deleteChooseUS(Request $request)
    {
        $choose_us = ChooseUs::find($request->choose_us_id);

        if (isset($choose_us)) {
            delete_image($choose_us->icon);
            $choose_us->delete();
        }

        $choose_us->delete();

        return redirect()->route('admin.manage_choose_us')->with('message', 'Successfully Deleted!');
    }

    public function addClient()
    {
        return view('backend.cms.client.show');
    }
    public function saveClient(Request $request)
    {
        $client = new Client();
        $client->status = $request->status;
        $client->position = $request->position;
        $client->image = image_upload($request->image);
        $client->save();
        return redirect(route('admin.manage_client'))->with('message', 'Successfully Added!');
    }
    public function manageClient()
    {
        return view('backend.cms.client.index', [
            'client' => Client::get(),
        ]);
    }
    public function editClient($id)
    {
        $client = Client::find($id);
        return view('backend.cms.client.edit', [
            'client' => $client
        ]);
    }
    public function updateClient(Request $request)
    {
        $client               = Client::find($request->client_id);
        $client->position = $request->position;
        $client->status = $request->status;
        if ($request->file('image')) {
            if (isset($client)) {
                delete_image($client->image);
                $client->delete();
            }    
            $client->image = image_upload($request->image);
        }
        $client->save();
        return redirect(route('admin.manage_client'))->with('message', 'Successfully Updated!');
    }

    public function deleteClient(Request $request)
    {
        $client = Client::find($request->client_id);

        if (isset($client)) {
            delete_image($client->image);
            $client->delete();
        }

        $client->delete();

        return redirect()->route('admin.manage_client')->with('message', 'Successfully Deleted!');
    }

    public function addService()
    {
        return view('backend.cms.service.show');
    }
    public function saveService(Request $request)
    {
        $service = new Service();
        $service->en_title = $request->en_title;
        $service->button_link = $request->button_link;
        $service->en_description = $request->en_description;
        $service->en_button_text = $request->en_button_text;
        $service->position = $request->position;
        $service->image = image_upload($request->image);
        $service->status = $request->status;
        $service->save();
        return redirect(route('admin.manage_service'))->with('message', 'Successfully Added!');
    }
    public function manageService()
    {
        return view('backend.cms.service.index', [
            'service' => Service::get(),
        ]);
    }
    public function editService($id)
    {
        $service = Service::find($id);
        return view('backend.cms.service.edit', [
            'service' => $service
        ]);
    }
    public function updateService(Request $request)
    {
        $service               = Service::find($request->service_id);
        $service->en_title = $request->en_title;
        $service->button_link = $request->button_link;
        $service->en_description = $request->en_description;
        $service->en_button_text = $request->en_button_text;
        $service->position = $request->position;
        $service->status = $request->status;
        if ($request->file('image')) {
            if (isset($service)) {
                delete_image($service->image);
                $service->delete();
            }    
            $service->image = image_upload($request->image);
        }
        $service->save();
        return redirect(route('admin.manage_service'))->with('message', 'Successfully Updated!');
    }

    public function deleteService(Request $request)
    {
        $service = Service::find($request->service_id);

        if (isset($service)) {
            delete_image($service->image);
            $service->delete();
        }

        $service->delete();

        return redirect()->route('admin.manage_service')->with('message', 'Successfully Deleted!');
    }

    public function addPaymentCategory()
    {
        return view('backend.cms.payment_category.show');
    }
    public function savePaymentCategory(Request $request)
    {
        $payment_category = new PaymentCategory();
        $payment_category->en_title = $request->en_title;
        $payment_category->status = $request->status;
        $payment_category->save();
        return redirect(route('admin.manage_payment_category'))->with('message', 'Successfully Added!');
    }
    public function managePaymentCategory()
    {
        return view('backend.cms.payment_category.index', [
            'payment_category' => PaymentCategory::get(),
        ]);
    }
    public function editPaymentCategory($id)
    {
        $payment_category = PaymentCategory::find($id);

        return view('backend.cms.payment_category.edit', [
            'payment_category' => $payment_category
        ]);
    }
    public function updatePaymentCategory(Request $request)
    {
        $payment_category               = PaymentCategory::find($request->payment_category_id);
        $payment_category->en_title = $request->en_title;
        $payment_category->status = $request->status;
        $payment_category->save();
        return redirect(route('admin.manage_payment_category'))->with('message', 'Successfully Updated!');
    }

    public function deletePaymentCategory(Request $request)
    {
        $payment_category = PaymentCategory::find($request->payment_category_id);

        if (!$payment_category) {
            return redirect()->route('admin.manage_payment_category')->with('error', 'Payment Category not found.');
        }

        $payment_category->delete();

        return redirect()->route('admin.manage_payment_category')->with('message', 'Successfully Deleted!');
    }

    public function addPayment()
    {
        return view('backend.cms.payment_method.show', [
            'category' => PaymentCategory::where('status', 1)->get(),
        ]);
    }
    public function savePayment(Request $request)
    {
        $payment = new Payment();
        $payment->payment_category_id = $request->payment_category_id;

        $payment->en_banner_text = $request->en_banner_text;

        $payment->en_heading_one = $request->en_heading_one;
        $payment->en_description_one = $request->en_description_one;
        $payment->image_one = image_upload($request->image_one);

        $payment->en_heading_two = $request->en_heading_two;
        $payment->en_description_two = $request->en_description_two;
        $payment->image_two = image_upload($request->image_two);

        $payment->en_heading_three = $request->en_heading_three;
        $payment->en_description_three = $request->en_description_three;
        $payment->image_three = image_upload($request->image_three);

        $payment->en_heading_four = $request->en_heading_four;
        $payment->en_description_four = $request->en_description_four;
        $payment->image_four = image_upload($request->image_four);

        $payment->en_heading_five = $request->en_heading_five;
        $payment->en_description_five = $request->en_description_five;
        $payment->image_five = image_upload($request->image_five);

        $payment->en_heading_six = $request->en_heading_six;
        $payment->en_description_six = $request->en_description_six;
        $payment->image_six = image_upload($request->image_six);

        $payment->en_heading_seven = $request->en_heading_seven;
        $payment->en_description_seven = $request->en_description_seven;
        $payment->image_seven = image_upload($request->image_seven);

        $payment->en_heading_eight = $request->en_heading_eight;
        $payment->en_description_eight = $request->en_description_eight;
        $payment->image_eight = image_upload($request->image_eight);


        $payment->status = $request->status;
        $payment->save();
        return redirect(route('admin.manage_payment'))->with('message', 'Successfully Added!');
    }
    public function managePayment()
    {
        return view('backend.cms.payment_method.index', [
            'bkash_payment' => Payment::where('payment_category_id', 2)->get(),
            'rocket_payment' => Payment::where('payment_category_id', 3)->get(),
            'nagad_payment' => Payment::where('payment_category_id', 4)->get(),
        ]);
    }
    public function editPayment($id)
    {
        $payment = Payment::find($id);

        return view('backend.cms.payment_method.edit', [
            'category' => PaymentCategory::where('status', 1)->get(),
            'payment' => $payment
        ]);
    }
    public function updatePayment(Request $request)
    {
        $payment               = Payment::find($request->payment_id);
        $payment->payment_category_id = $request->payment_category_id;

        $payment->en_banner_text = $request->en_banner_text;

        $payment->en_heading_one = $request->en_heading_one;
        $payment->en_description_one = $request->en_description_one;

        if ($request->file('image_one')) {
            if (isset($payment)) {
                delete_image($payment->image_one);
                $payment->delete();
            }
            $payment->image_one = image_upload($request->image_one);
        }

        $payment->en_heading_two = $request->en_heading_two;
        $payment->en_description_two = $request->en_description_two;
        if ($request->file('image_two')) {
            if (isset($payment)) {
                delete_image($payment->image_two);
                $payment->delete();
            }
            $payment->image_two = image_upload($request->image_two);
        }

        $payment->en_heading_three = $request->en_heading_three;
        $payment->en_description_three = $request->en_description_three;
        if ($request->file('image_three')) {
            if (isset($payment)) {
                delete_image($payment->image_three);
                $payment->delete();
            }
            $payment->image_three = image_upload($request->image_three);
        }

        $payment->en_heading_four = $request->en_heading_four;
        $payment->en_description_four = $request->en_description_four;
        if ($request->file('image_four')) {
            if (isset($payment)) {
                delete_image($payment->image_four);
                $payment->delete();
            }
            $payment->image_four = image_upload($request->image_four);
        }

        $payment->en_heading_five = $request->en_heading_five;
        $payment->en_description_five = $request->en_description_five;
        if ($request->file('image_five')) {
            if (isset($payment)) {
                delete_image($payment->image_five);
                $payment->delete();
            }
            $payment->image_five = image_upload($request->image_five);
        }

        $payment->en_heading_six = $request->en_heading_six;
        $payment->en_description_six = $request->en_description_six;
        if ($request->file('image_six')) {
            if (isset($payment)) {
                delete_image($payment->image_six);
                $payment->delete();
            }
            $payment->image_six = image_upload($request->image_six);
        }
        $payment->en_heading_seven = $request->en_heading_seven;
        $payment->en_description_seven = $request->en_description_seven;

        if ($request->file('image_seven')) {
            if (isset($payment)) {
                delete_image($payment->image_seven);
                $payment->delete();
            }
            $payment->image_seven = image_upload($request->image_seven);
        }

        $payment->en_heading_eight = $request->en_heading_eight;
        $payment->en_description_eight = $request->en_description_eight;

        if ($request->file('image_eight')) {
            if (isset($payment)) {
                delete_image($payment->image_eight);
                $payment->delete();
            }
            $payment->image_eight = image_upload($request->image_eight);
        }

        $payment->save();
        return redirect(route('admin.manage_payment'))->with('message', 'Successfully Updated!');
    }

    public function deletePayment(Request $request)
    {
        $payment = Payment::find($request->payment_id);

        if (isset($payment)) {
            delete_image($payment->image_one);
            $payment->delete();
        }
        if (isset($payment)) {
            delete_image($payment->image_two);
            $payment->delete();
        }
        if (isset($payment)) {
            delete_image($payment->image_three);
            $payment->delete();
        }
        if (isset($payment)) {
            delete_image($payment->image_four);
            $payment->delete();
        }
        if (isset($payment)) {
            delete_image($payment->image_five);
            $payment->delete();
        }
        if (isset($payment)) {
            delete_image($payment->image_six);
            $payment->delete();
        }
        if (isset($payment)) {
            delete_image($payment->image_seven);
            $payment->delete();
        }
        if (isset($payment)) {
            delete_image($payment->image_eight);
            $payment->delete();
        }
        $payment->delete();

        return redirect()->route('admin.manage_payment')->with('message', 'Successfully Deleted!');
    }

    public function addMission()
    {
        return view('backend.cms.mission.show');
    }
    public function saveMission(Request $request)
    {
        $mission = new Mission();

        $mission->en_title = $request->en_title;
        $mission->en_description = $request->en_description;
        $mission->image = image_upload($request->image);
        $mission->save();
        return redirect(route('admin.manage_mission'))->with('message', 'Successfully Added!');
    }
    public function manageMission()
    {
        return view('backend.cms.mission.index', [
            'mission' => Mission::orderBy('id', 'desc')->get(),
        ]);
    }
    public function editMission($id)
    {
        $mission = Mission::find($id);

        return view('backend.cms.mission.edit', [
            'mission' => $mission
        ]);
    }
    public function updateMission(Request $request)
    {
        $mission               = Mission::find($request->mission_id);
        $mission->en_title = $request->en_title;
        $mission->en_description = $request->en_description;

        if ($request->file('image')) {
            if (isset($mission)) {
                delete_image($mission->image);
                $mission->delete();
            }
            $mission->image = image_upload($request->image);
        }
        $mission->save();
        return redirect(route('admin.manage_mission'))->with('message', 'Successfully Updated!');
    }

    public function addVision()
    {
        return view('backend.cms.vision.show');
    }
    public function saveVision(Request $request)
    {
        $vision = new Vision();

        $vision->en_title = $request->en_title;
        $vision->en_description = $request->en_description;
        $vision->image = image_upload($request->image);
        $vision->save();
        return redirect(route('admin.manage_vision'))->with('message', 'Successfully Added!');
    }
    public function manageVision()
    {
        return view('backend.cms.vision.index', [
            'vision' => Vision::orderBy('id', 'desc')->get(),
        ]);
    }
    public function editVision($id)
    {
        $vision = Vision::find($id);

        return view('backend.cms.vision.edit', [
            'vision' => $vision
        ]);
    }
    public function updateVision(Request $request)
    {
        $vision               = Vision::find($request->vision_id);
        $vision->en_title = $request->en_title;
        $vision->en_description = $request->en_description;

        if ($request->file('image')) {
            if (isset($vision)) {
                delete_image($vision->image);
                $vision->delete();
            }
            $vision->image = image_upload($request->image);
        }
        $vision->save();
        return redirect(route('admin.manage_vision'))->with('message', 'Successfully Updated!');
    }

    public function addFaq()
    {
        return view('backend.cms.faq.show');
    }
    public function saveFaq(Request $request)
    {
        $faq = new Faq();
        $faq->en_question_one = $request->en_question_one;
        $faq->en_answer_one = $request->en_answer_one;

        $faq->en_question_two = $request->en_question_two;
        $faq->en_answer_two = $request->en_answer_two;

        $faq->en_question_three = $request->en_question_three;
        $faq->en_answer_three = $request->en_answer_three;

        $faq->en_question_four = $request->en_question_four;
        $faq->en_answer_four = $request->en_answer_four;

        $faq->en_question_five = $request->en_question_five;
        $faq->en_answer_five = $request->en_answer_five;

        $faq->image = image_upload($request->image);
        $faq->save();
        return redirect(route('admin.manage_faq'))->with('message', 'Successfully Added!');
    }
    public function manageFaq()
    {
        return view('backend.cms.faq.index', [
            'faq' => Faq::orderBy('id', 'desc')->get(),
        ]);
    }
    public function editFaq($id)
    {
        $faq = Faq::find($id);

        return view('backend.cms.faq.edit', [
            'faq' => $faq
        ]);
    }
    public function updateFaq(Request $request)
    {
        $faq               = Faq::find($request->faq_id);

        $faq->en_question_one = $request->en_question_one;
        $faq->en_answer_one = $request->en_answer_one;

        $faq->en_question_two = $request->en_question_two;
        $faq->en_answer_two = $request->en_answer_two;

        $faq->en_question_three = $request->en_question_three;
        $faq->en_answer_three = $request->en_answer_three;

        $faq->en_question_four = $request->en_question_four;
        $faq->en_answer_four = $request->en_answer_four;

        $faq->en_question_five = $request->en_question_five;
        $faq->en_answer_five = $request->en_answer_five;

        if ($request->file('image')) {
            if (isset($faq)) {
                delete_image($faq->image);
                $faq->delete();
            }
            $faq->image = image_upload($request->image);
        }

        $faq->save();
        return redirect(route('admin.manage_faq'))->with('message', 'Successfully Updated!');
    }
    public function deleteFaq(Request $request)
    {
        $faq = Faq::find($request->faq_id);

        if (!$faq) {
            return redirect()->route('admin.manage_faq')->with('error', 'Faq  not found.');
        }

        if (isset($faq)) {
            delete_image($faq->image_eight);
            $faq->delete();
        }

        $faq->delete();

        return redirect()->route('admin.manage_faq')->with('message', 'Successfully Deleted!');
    }

}
