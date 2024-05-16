<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Controllers\Admin\AdminController;

class AdminController extends Controller
{
    public function manageAdmin(){
        return view('backend.admin.index',[
            'users' => User::get()
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
}
