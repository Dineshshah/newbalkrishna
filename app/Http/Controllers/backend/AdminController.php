<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Admin;

class AdminController extends Controller
{
     public function viewAdmin()
    {
    	$admin = Admin::all();
        return view('cd-admin.admin.view-all-admin',compact('admin'));

    }

    public function add()
    {
        return view('cd-admin.admin.add-new-admin');

    }

    public function insert(Request $request)
    {
    	$admin = new Admin;
    	$admin->name =$request->name;
    	$admin->email =$request->email;
    	$admin->password =bcrypt($request->password);
    	$admin->role ='admin';
    	$admin->address = $request->address;
    	$admin->phoneNo = $request->phoneNo;
    	//dd($admin);
    	$admin->save();
    	return redirect()->to('view-all-admin');
    }

    public function delete($id)
    {
         $admin = Admin::destroy($id);
        session()->flash('success', 'Deleted Successfully!!');
        return redirect()->route('admin.view');
    }

    public function checkmail(Request $request)
	{
		$check = Admin::where('email',$request->email)->get();


		if (count($check) != 0) {
			echo "Email already exists";
		}
		else
		{
			echo"Email exists";
		}

	}
}
