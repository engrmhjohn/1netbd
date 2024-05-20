<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Area;
use Illuminate\Http\Request;

use App\Http\Controllers\Admin\AdminController;

require_once app_path('Helper/image.php');

class AdminController extends Controller
{
    public function manageAdmin(){
        return view('backend.admin.index',[
            'users' => User::get()
        ]);
    }
    public function editAdmin($id){
        $user = User::find($id);
        $areas = Area::get();
        return view('backend.admin.edit',[
            'user' => $user,
            'areas' => $areas
        ]);
    }
    public function role($id, $newRole) {
        $user = User::find($id);
        $user->role = $newRole;
        $user->save();
        return back();
    }

    public function adminProfile(){
        return view('backend.admin.profile');
    }

    public function deleteAdmin($id)
    {
        $admin = User::findOrFail($id);

        $admin->delete();

        return redirect()->route('manage_admin')->with('message', 'Successfully Deleted!');
    }

    public function pendingUser(){
        return view('backend.admin.pending_user',[
            'pending_user' => User::where('role','0')->get()
        ]);
    }
    public function adminUser(){
        return view('backend.admin.admin_user',[
            'admin_user' => User::where('role','1')->get()
        ]);
    }
    public function superAdminUser(){
        return view('backend.admin.super_admin_user',[
            'super_admin_user' => User::where('role','2')->get()
        ]);
    }
    public function viewerUser(){
        return view('backend.admin.viewer_user',[
            'viewer_user' => User::where('role','4')->get()
        ]);
    }
    public function editorUser(){
        return view('backend.admin.editor_user',[
            'editor_user' => User::where('role','3')->get()
        ]);
    }
     // Admin information change by super admin 
     public function updateUserNameByAdmin(Request $request)
     {
         $user_info               = User::find($request->id);
         $user_info->name = $request->name;
         $user_info->save();
         return redirect()->back()->with('message', 'User Name Successfully Updated!');
     }
 
     public function updateUserPhoneByAdmin(Request $request)
     {
         $request->validate([
             'phone' => 'required|string|unique:users,phone',
         ]);
         
         $user_info               = User::find($request->id);
         $user_info->phone = $request->phone;
         $user_info->save();
         return redirect()->back()->with('message', 'User Phone Successfully Updated!');
     }
 
     public function updateUserEmailByAdmin(Request $request)
     {
         $request->validate([
             'email' => 'required|string|unique:users,email',
         ]);
         
         $user_info               = User::find($request->id);
         $user_info->email = $request->email;
         $user_info->save();
         return redirect()->back()->with('message', 'User Email Successfully Updated!');
     }
 
     public function updateUserEmployeeIDByAdmin(Request $request)
     {
         $request->validate([
             'employee_id' => 'required|string|unique:users,employee_id',
         ]);
         
         $user_info               = User::find($request->id);
         $user_info->employee_id = $request->employee_id;
         $user_info->save();
         return redirect()->back()->with('message', 'User Employee ID Successfully Updated!');
     }
 
     public function updateUserPhotoByAdmin(Request $request)
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
         return redirect()->back()->with('message', 'Profile Photo Successfully Updated!');
     }
 
     public function updateUserPasswordByAdmin(Request $request)
     {
         $request->validate([
             'password' => 'required|string|min:8|confirmed', // Ensure password and password_confirmation match
         ]);
 
         $user_info = User::find($request->id);
         $user_info->password = Hash::make($request->password);
         $user_info->save();
 
         return redirect()->back()->with('message', 'Password successfully updated!');
     }
     public function updateBranchNameByAdmin(Request $request)
     {
         $user_info               = User::find($request->id);
         $user_info->area_id = $request->area_id;
         $user_info->save();
         return redirect()->back()->with('message', 'Branch Name Successfully Updated!');
     }
}
