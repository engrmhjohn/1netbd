<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BuyPackage;
use App\Models\TC;
use App\Models\KAM;
use App\Models\CompanyInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewForm;
use App\Models\Area;
use Illuminate\Support\Facades\Auth;

use \Mpdf\Mpdf;

require_once app_path('Helper/image.php');

class PacakgeBuyController extends Controller
{
    public function saveBuyPackage(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha_spaces',
            'phone' => 'required|numeric',
            'nid_number' => 'required|numeric',
            'address' => 'required|max:300',
            'agree' => 'required',
            'photo' => 'required|mimes:jpeg,png,jpg',
            'nid_front' => 'mimes:jpeg,png,jpg',
            'nid_back' => 'mimes:jpeg,png,jpg',
        ], [
            'name.required' => 'Full Name is required',
            'name.alpha_spaces' => 'Full Name should contain only alphabetic characters and spaces',
            'phone.required' => 'Phone Number is required',
            'phone.numeric' => 'Phone Number must be numeric',
            'nid_number.required' => 'NID Number is required',
            'nid_number.numeric' => 'NID Number must be numeric',
            'address.required' => 'Address is required',
            'address.max' => 'Address should not exceed 300 characters',
            'agree.required' => 'You must agree to the terms',
            'photo.required' => 'User Photo is required',
            'photo.mimes' => 'User Photo must be in JPEG, PNG, or JPG format',
            'nid_front.mimes' => 'NID Front must be in JPEG, PNG, or JPG format',
            'nid_back.mimes' => 'NID Back must be in JPEG, PNG, or JPG format',
        ]);
        $buy = new BuyPackage();
        $buy->admin_id = $request->admin_id;
        $buy->area_id = $request->area_id;
        $buy->en_package_name = $request->en_package_name;
        $buy->en_mbps_value = $request->en_mbps_value;
        $buy->en_amount = $request->en_amount;
        $buy->en_otc_amount = $request->en_otc_amount;
        $buy->en_discount_otc = $request->en_discount_otc;
        $buy->en_advance_bill_amount = $request->en_advance_bill_amount;
        $buy->formattedTotal = $request->formattedTotal;
        $buy->name = $request->name;
        $buy->phone = $request->phone;
        $buy->email = $request->email;
        $buy->nid_number = $request->nid_number;
        $buy->address = $request->address;
        $buy->remarks = $request->remarks;
        $buy->agree = $request->agree;
        $buy->connection_type = $request->connection_type;
        $buy->nid_have = $request->nid_have;
        $buy->marketing_person_name = $request->marketing_person_name;
        $buy->photo = image_upload_passport_pic($request->photo);
        $buy->nid_front = image_upload_nid($request->nid_front);
        $buy->nid_back = image_upload_nid($request->nid_back);
        $buy->birth_certificate = image_upload_birth_certificate($request->birth_certificate);
        $buy->save();

        $request->session()->put('user_info', $buy);

        // Send email notification
        $newForm = $request->all();
        Mail::to('newclient@onesky.com.bd')->send(new NewForm($newForm));

        return redirect(route('success_buy_package', $buy->id));
    }
    public function manageBuyPackage()
    {
        $user = Auth::user();

        // Array of specific area IDs
        $specific_area_ids = [1, 2, 5];

        if ($user->role == '2' || in_array($user->area_id, $specific_area_ids)) {
            // Super admin or users with specified area IDs can see all records
            $registrations = BuyPackage::orderBy('id', 'desc')->get();
        } else {
            // Other admins can see only the records matching their area_id
            $registrations = BuyPackage::where('area_id', $user->area_id)->orderBy('id', 'desc')->get();
        }

        return view('backend.admin.registration.index', [
            'registration' => $registrations
        ]);
    }

    public function pendingConnection()
    {
        $user = Auth::user();

        // Array of specific area IDs
        $specific_area_ids = [1, 2, 5];

        if ($user->role == '2' || in_array($user->area_id, $specific_area_ids)) {
            // Super admin or users with specified area IDs can see all records
            $pending_connection = BuyPackage::where('status', '0')->orderBy('id', 'desc')->get();
        } else {
            // Other admins can see only the records matching their area_id
            $pending_connection = BuyPackage::where('area_id', $user->area_id)->where('status', '0')->orderBy('id', 'desc')->get();
        }

        return view('backend.admin.registration.pending_connection', [
            'pending_connection' => $pending_connection
        ]);
    }
    public function completedConnection()
    {
        $user = Auth::user();

        // Array of specific area IDs
        $specific_area_ids = [1, 2, 5];

        if ($user->role == '2' || in_array($user->area_id, $specific_area_ids)) {
            // Super admin can see all records
            $completed_connection = BuyPackage::where('status', '1')->orderBy('id', 'desc')->get();
        } else {
            // Other admins can see only the records matching their area_id
            $completed_connection = BuyPackage::where('area_id', $user->area_id)->where('status', '1')->orderBy('id', 'desc')->get();
        }
        return view('backend.admin.registration.completed_connection', [
            'completed_connection' => $completed_connection
        ]);
    }

    public function editBuyPackage($id)
    {
        $registration = BuyPackage::find($id);
        $areas = Area::where('status', '1')->orderBy('en_area_name', 'asc')->get();

        return view('backend.admin.registration.edit', [
            'registration' => $registration,
            'areas' => $areas
        ]);
    }
    public function updateBuyPackage(Request $request)
    {
        $buy = BuyPackage::find($request->buy_id);
        $buy->admin_id = $request->admin_id;
        $buy->area_id = $request->area_id;
        $buy->en_package_name = $request->en_package_name;
        $buy->en_mbps_value = $request->en_mbps_value;
        $buy->en_amount = $request->en_amount;
        $buy->en_otc_amount = $request->en_otc_amount;
        $buy->subtotal = $request->subtotal;
        $buy->en_discount_monthly_fee = $request->en_discount_monthly_fee;
        $buy->en_discount_otc = $request->en_discount_otc;
        $buy->en_advance_bill_amount = $request->en_advance_bill_amount;
        $buy->formattedTotal = $request->formattedTotal;
        $buy->name = $request->name;
        $buy->phone = $request->phone;
        $buy->email = $request->email;
        $buy->nid_number = $request->nid_number;
        $buy->address = $request->address;
        $buy->remarks = $request->remarks;
        $buy->username = $request->username;
        $buy->ppoe_password = $request->ppoe_password;
        $buy->connection_type = $request->connection_type;
        $buy->marketing_person_name = $request->marketing_person_name;

        if ($request->file('photo')) {
            if (isset($buy)) {
                delete_image_special($buy->photo);
            }
            $buy->photo = image_upload_passport_pic($request->photo);
        }
        if ($request->file('nid_front')) {
            if (isset($buy)) {
                delete_image_special($buy->nid_front);
            }
            $buy->nid_front = image_upload_nid($request->nid_front);
        }
        if ($request->file('nid_back')) {
            if (isset($buy)) {
                delete_image_special($buy->nid_back);
            }
            $buy->nid_back = image_upload_nid($request->nid_back);
        }

        if ($request->file('birth_certificate')) {
            if (isset($buy)) {
                delete_image_special($buy->birth_certificate);
            }
            $buy->birth_certificate = image_upload_birth_certificate($request->birth_certificate);
        }

        $buy->save();
        return redirect(route('manage_buy_package'))->with('message', 'Successfully Updated!');
    }

    public function previewBuyPackage($id)
    {
        $registration_details = BuyPackage::where('id', $id)->first();
        return view('backend.admin.registration.preview', [
            'registration_details' => $registration_details
        ]);
    }

    public function status($id)
    {
        $user = BuyPackage::find($id);
        if ($user->status == 0) {
            $user->status = 1;
            $user->save();
            return back();
        } else {
            $user->status = 0;
            $user->save();
            return back();
        }
    }
    public function deleteBuyPackage(Request $request)
    {
        $registration = BuyPackage::find($request->registration_id);

        if (isset($registration)) {
            delete_image_special($registration->photo);
            $registration->delete();
        }
        if (isset($registration)) {
            delete_image_special($registration->nid_front);
            $registration->delete();
        }
        if (isset($registration)) {
            delete_image_special($registration->nid_back);
            $registration->delete();
        }

        $registration->delete();

        return redirect()->route('manage_buy_package')->with('message', 'Successfully Deleted!');
    }

    public function successBuyPackage(Request $request)
    {
        $userInfo = $request->session()->get('user_info');

        if ($userInfo) {
            return view('frontend.packages.success_package_buy', [
                'userInfo' => $userInfo,
                'company_info' => CompanyInfo::latest('id')->first(),
            ]);
        } else {
            return redirect()->route('/');
        }
    }

    public function exportPackagePdf(Request $request, $id)
    {
        $userInfo = BuyPackage::where('id', $id)->first();
        $tc = TC::latest('id')->first();
        $companyAddress = CompanyInfo::value('en_address');
        $logoImage = CompanyInfo::value('color_logo');

        // Lazy load images or cache them before passing to the view

        // Create mPDF instance
        $mpdf = new Mpdf([
            'default_font' => 'kohinoor',
        ]);

        // Construct the PDF filename with the user's name
        $pdfFileName = $userInfo->name . '_registration_form.pdf';

        // Load the view and pass data to it
        $html = view('frontend.packages.user_registration', [
            'userInfo' => $userInfo,
            'tc' => $tc,
            'color_logo' => $logoImage,
            'en_address' => $companyAddress
        ])->render();


        // Write HTML content to mPDF
        $mpdf->WriteHTML($html);

        // Output the PDF with the constructed filename
        $mpdf->Output($pdfFileName, \Mpdf\Output\Destination::DOWNLOAD);
    }

    public function sendRegistrationEmail($id)
    {
        $userInfo = BuyPackage::where('id', $id)->first();
        $tc = TC::latest('id')->first();
        $companyAddress = CompanyInfo::value('en_address');
        $logoImage = CompanyInfo::value('color_logo');

        // Create an mPDF instance
        $mpdf = new Mpdf();

        // Load the view into mPDF
        $pdf = \View::make('frontend.packages.user_registration', [
            'userInfo' => $userInfo,
            'tc' => $tc,
            'color_logo' => $logoImage,
            'en_address' => $companyAddress
        ]);

        // Get the HTML content
        $html = $pdf->render();

        // Write HTML content to mPDF
        $mpdf->WriteHTML($html);

        // Get the output of mPDF
        $output = $mpdf->Output('', 'S');

        // Replace 'recipient@example.com' with the user's email address
        $recipientEmail = $userInfo->email;
        $recipientName = $userInfo->name;

        // Dynamically generate the PDF filename based on the username
        $pdfFileName = $userInfo->name . '_registration_form.pdf';

        // Personalized message
        $greetings = "Congratulations, $recipientName! \n\n";
        $greetings .= "Thank you for registering for the new connection. We have initiated the process and created a ticket for your new connection. Please be patient as we work to complete your request. If you have any questions or need assistance, feel free to contact us at any time. Our hotline number is 09611 344 344.";

        // Send email with PDF attachment and personalized message
        Mail::send([], [], function ($message) use ($output, $recipientEmail, $recipientName, $pdfFileName, $greetings) {
            $message->to($recipientEmail, $recipientName)
                ->subject('One Net New Connection Registration Details')
                ->text($greetings)
                ->attachData($output, $pdfFileName, [
                    'mime' => 'application/pdf',
                ]);
        });

        // Optionally, you can redirect back to a specific route and include a success message
        return redirect()->route('manage_buy_package')->with('message', 'Email Successfully Sent!');
    }

    public function filterRegistration(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $user = Auth::user();

        // Array of specific area IDs
        $specific_area_ids = [1, 2, 5];


        if ($user->role == '2' || in_array($user->area_id, $specific_area_ids)) {
            // Super admin can see all records
            $registration = BuyPackage::whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
        } else {
            // Other admins can see only the records matching their area_id
            $registration = BuyPackage::where('area_id', $user->area_id)->whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
        }
        return view('backend.admin.registration.filter_index', [
            'registration' => $registration
        ]);
    }

    public function filterPendingRegistration(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $user = Auth::user();

        // Array of specific area IDs
        $specific_area_ids = [1, 2, 5];


        if ($user->role == '2' || in_array($user->area_id, $specific_area_ids)) {
            // Super admin or specific area's admin can see prending records
            $registration = BuyPackage::whereDate('created_at', '>=', $start_date)
                                        ->whereDate('created_at', '<=', $end_date)
                                        ->where('status', '0')
                                        ->get();
        } else {
            // Other admins can see only the pending records matching their area_id
            $registration = BuyPackage::where('area_id', $user->area_id)
                                        ->whereDate('created_at', '>=', $start_date)
                                        ->whereDate('created_at', '<=', $end_date)
                                        ->where('status', '0')
                                        ->get();
        }
        return view('backend.admin.registration.filter_pending_connection', [
            'registration' => $registration
        ]);
    }

    public function filterCompletedRegistration(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $user = Auth::user();

        // Array of specific area IDs
        $specific_area_ids = [1, 2, 5];


        if ($user->role == '2' || in_array($user->area_id, $specific_area_ids)) {
            // Super admin can see all records
            $registration = BuyPackage::where('status', '1')->whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
        } else {
            // Other admins can see only the records matching their area_id
            $registration = BuyPackage::where('status', '1')->where('area_id', $user->area_id)->whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
        }
        return view('backend.admin.registration.filter_completed_connection', [
            'registration' => $registration
        ]);
    }
}
