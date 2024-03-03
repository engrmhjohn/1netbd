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

    public function employeeList(){
        $employee = User::where('role','1')->get();
        return view('backend.admin.employee',compact('employee'));
    }
    public function pendingEmployeeList(){
        $pending_employee = User::where('role','0')->get();
        return view('backend.admin.pending_employee',compact('pending_employee'));
    }
}
