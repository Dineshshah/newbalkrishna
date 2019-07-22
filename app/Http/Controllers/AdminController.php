<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:cd-admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('cd-admin.home.home');
    }

    public function adminlogout(Request $request)
    {
    	//dd('imhere');

    	 $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/cd-admin');
        
    }

     protected function guard()
    {
        return Auth::guard();
    }
}
