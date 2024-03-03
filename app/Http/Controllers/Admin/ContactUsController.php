<?php
  
namespace App\Http\Controllers\Admin;
  
use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
  
class ContactUsController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11|numeric',
            'subject' => 'required',
            'query' => 'required'
        ], [
            'name.required'  => 'Full Name is required',
            'email.required' => 'Valid Email is required',
            'phone.required' => 'Phone Number must be 11 digits',
            'subject.required' => 'Subject is required',
            'query.required'   => 'Message is required',
        ]);
  
        ContactUs::create($request->all());

        Alert::success('Mail Sent Successfully','OSEM will contact you shortly');
  
        return redirect()->back();
    }
    public function manageContactMessage()
    {
        return view('backend.admin.contact_query.index', [
            'contact_query' => ContactUs::orderBy('id','desc')->paginate(5),
        ]);
    }
    public function viewContactMessage($id)
    {
        $contact_details = ContactUs::where('id', $id)->first();
    
        return view('backend.admin.contact_query.details', [
            'contact_details' => $contact_details
        ]);
    }
    public function deleteContactMessage(Request $request)
    {
        $contact_query = ContactUs::find($request->contact_query_id);

        $contact_query->delete();

        return redirect()->route('admin.manage_contact_message')->with('message', 'Successfully Deleted!');
    }
}
