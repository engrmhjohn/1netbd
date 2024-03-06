<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Package;
use App\Models\BTRC;
use App\Models\TC;

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

}
