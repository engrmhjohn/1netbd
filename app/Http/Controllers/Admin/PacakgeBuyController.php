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
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;

use \Mpdf\Mpdf;

require_once app_path('Helper/image.php');

class PacakgeBuyController extends Controller
{
    private function normalizePhone($phone)
    {
        $phone = preg_replace('/\D/', '', $phone); // remove non-numeric

        if (strlen($phone) == 11 && substr($phone, 0, 2) == '01') {
            return '88' . $phone;
        }

        if (strlen($phone) == 13 && substr($phone, 0, 2) == '88') {
            return $phone;
        }

        return null; // invalid
    }

public function sendOtp(Request $request)
{
    $phone = $this->normalizePhone($request->phone);

    if (!$phone) {
        return response()->json([
            'status' => false,
            'message' => 'Invalid phone number format'
        ]);
    }

    $ip = $request->ip();

    /* ==============================
       LIMIT CONFIG
    =============================== */
    $PHONE_LIMIT = 2;            // per phone
    $IP_LIMIT    = 20;           // per IP
    $PHONE_TTL   = now()->addDays(30);
    $IP_TTL      = now()->addHours(24);

    /* ==============================
       CACHE KEYS
    =============================== */
    $phoneKey = 'otp_phone_' . $phone;
    $ipKey    = 'otp_ip_' . $ip;

    $phoneAttempts = Cache::get($phoneKey, 0);
    $ipAttempts    = Cache::get($ipKey, 0);

    /* ==============================
       BLOCK CONDITIONS
    =============================== */
    if ($phoneAttempts >= $PHONE_LIMIT) {
        return response()->json([
            'status' => false,
            'message' => 'OTP limit reached for this number. Please contact support.'
        ]);
    }

    if ($ipAttempts >= $IP_LIMIT) {
        return response()->json([
            'status' => false,
            'message' => 'Too many OTP requests from this IP. Please try again after 24 hours.'
        ]);
    }

    /* ==============================
       GENERATE OTP
    =============================== */
    $otp = rand(100, 999);

    session([
        'otp' => $otp,
        'otp_phone' => $phone,
        'otp_verified' => false,
        'otp_expires_at' => now()->addHours(24)->timestamp // OTP valid 24h
    ]);

    /* ==============================
       INCREMENT COUNTERS
    =============================== */
    Cache::put($phoneKey, $phoneAttempts + 1, $PHONE_TTL);
    Cache::put($ipKey, $ipAttempts + 1, $IP_TTL);

    /* ==============================
       SEND SMS
    =============================== */
    $this->sendSMS(
        $phone,
        "Your OTP for internet package registration is {$otp}. Valid for 24 hours."
    );

    return response()->json([
        'status' => true,
        'message' => 'OTP sent successfully'
    ]);
}




public function verifyOtp(Request $request)
{
    if (!session('otp') || !session('otp_expires_at')) {
        return response()->json([
            'status' => false,
            'message' => 'OTP expired. Please request again.'
        ]);
    }

    if (now()->timestamp > session('otp_expires_at')) {
        Session::forget(['otp', 'otp_expires_at']);
        return response()->json([
            'status' => false,
            'message' => 'OTP expired. Please resend.'
        ]);
    }

    if ($request->otp == session('otp')) {
        session(['otp_verified' => true]);

        return response()->json([
            'status' => true,
            'phone' => session('otp_phone')
        ]);
    }

    return response()->json([
        'status' => false,
        'message' => 'Invalid OTP'
    ]);
}


public function resetOtp()
{
    Session::forget([
        'otp',
        'otp_verified',
        'otp_phone',
        'otp_expires_at'
    ]);

    return response()->json(['status' => true]);
}

    public function saveBuyPackage(Request $request)
    {
        if (!Session::get('otp_verified')) {
            return back()->withErrors([
                'phone' => 'Please verify OTP before submitting the form'
            ]);
        }
        $request->validate([
            'name' => 'required|alpha_spaces',
            'phone' => 'required|numeric',
            'nid_number' => 'required',
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
        Session::forget(['otp', 'otp_verified', 'otp_phone']);
        // $newForm = $request->all();
        // Mail::to('newclient@onesky.com.bd')->send(new NewForm($newForm));

        return redirect(route('success_buy_package', $buy->id));
    }
    private function sendSMS($recipient, $smsBody)
    {
        $apiUrl = env('SMS_API_URL');
        $username = env('SMS_USERNAME');
        $password = env('SMS_PASSWORD');
        $source = env('SMS_SOURCE');

        $postData = [
            'username' => $username,
            'password' => $password,
            'type'     => '0',
            'dlr'      => '1',
            'destination' => $recipient,
            'source'   => $source,
            'message'  => $smsBody,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
    public function manageBuyPackage()
    {
        $user = Auth::user();

        $branches = Area::orderBy('en_area_name', 'asc')->get();

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
            'registration' => $registrations,
            'branches' => $branches
        ]);
    }

    public function pendingConnection()
    {
        $user = Auth::user();

        $branches = Area::orderBy('en_area_name', 'asc')->get();

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
            'pending_connection' => $pending_connection,
            'branches' => $branches
        ]);
    }
    public function completedConnection()
    {
        $user = Auth::user();

        $branches = Area::orderBy('en_area_name', 'asc')->get();

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
            'completed_connection' => $completed_connection,
            'branches' => $branches
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
        $buy->real_ip = $request->real_ip;

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
        $area_id = $request->area_id;
        $user = Auth::user();

        // Validate that both start_date and end_date are provided
        if (empty($start_date) || empty($end_date)) {
            return redirect()->back()->withErrors(['Both start date and end date are required.']);
        }

        // Array of specific area IDs
        $specific_area_ids = [1, 2, 5];

        if ($user->role == '2' || in_array($user->area_id, $specific_area_ids)) {
            // Super admin or users with specified area IDs can see all records
            $query = BuyPackage::whereDate('created_at', '>=', $start_date)
                ->whereDate('created_at', '<=', $end_date);

            if ($area_id != 'all' && $area_id != '') {
                $query->where('area_id', $area_id);
            }
            $registrations = $query->get();
        } else {
            // Other admins can see only the records matching their area_id
            $registrations = BuyPackage::where('area_id', $user->area_id)
                ->whereDate('created_at', '>=', $start_date)
                ->whereDate('created_at', '<=', $end_date)
                ->get();
        }

        $branches = Area::orderBy('en_area_name', 'asc')->get();

        return view('backend.admin.registration.filter_index', [
            'registration' => $registrations,
            'branches' => $branches
        ]);
    }

    public function filterPendingRegistration(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $area_id = $request->area_id;
        $user = Auth::user();

        // Validate that both start_date and end_date are provided
        if (empty($start_date) || empty($end_date)) {
            return redirect()->back()->withErrors(['Both start date and end date are required.']);
        }

        // Array of specific area IDs
        $specific_area_ids = [1, 2, 5];

        if ($user->role == '2' || in_array($user->area_id, $specific_area_ids)) {
            // Super admin or users with specified area IDs can see all records
            $query = BuyPackage::whereDate('created_at', '>=', $start_date)
                ->whereDate('created_at', '<=', $end_date)
                ->where('status', '0');

            if ($area_id != 'all' && $area_id != '') {
                $query->where('area_id', $area_id);
            }
            $registration = $query->get();
        } else {
            // Other admins can see only the records matching their area_id
            $registration = BuyPackage::where('area_id', $user->area_id)
                ->whereDate('created_at', '>=', $start_date)
                ->whereDate('created_at', '<=', $end_date)
                ->where('status', '0')
                ->get();
        }

        $branches = Area::orderBy('en_area_name', 'asc')->get();

        return view('backend.admin.registration.filter_pending_connection', [
            'registration' => $registration,
            'branches' => $branches
        ]);
    }

    public function filterCompletedRegistration(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $area_id = $request->area_id;
        $user = Auth::user();

        // Validate that both start_date and end_date are provided
        if (empty($start_date) || empty($end_date)) {
            return redirect()->back()->withErrors(['Both start date and end date are required.']);
        }

        // Array of specific area IDs
        $specific_area_ids = [1, 2, 5];

        if ($user->role == '2' || in_array($user->area_id, $specific_area_ids)) {
            // Super admin or users with specified area IDs can see all records
            $query = BuyPackage::whereDate('created_at', '>=', $start_date)
                ->whereDate('created_at', '<=', $end_date)
                ->where('status', '1');

            if ($area_id != 'all' && $area_id != '') {
                $query->where('area_id', $area_id);
            }
            $registration = $query->get();
        } else {
            // Other admins can see only the records matching their area_id
            $registration = BuyPackage::where('area_id', $user->area_id)
                ->whereDate('created_at', '>=', $start_date)
                ->whereDate('created_at', '<=', $end_date)
                ->where('status', '1')
                ->get();
        }

        $branches = Area::orderBy('en_area_name', 'asc')->get();

        return view('backend.admin.registration.filter_completed_connection', [
            'registration' => $registration,
            'branches' => $branches
        ]);
    }
}
