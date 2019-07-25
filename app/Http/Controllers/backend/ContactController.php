<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use App\Contact;
use Session;
use Auth;
use Mail;
use App\Repliedcontact;
use App\QuickMessage;

class ContactController extends Controller
{
    public function contactView()
    {
    	$contact = Contact::all();
    	return view('cd-admin.contact.contact-view',compact('contact'));
    }

    public function contactInsert(Request $request,$id)
    {
    	$this->validate($request,[
    		'message' => 'required',
    		]);

    	$rep = new Repliedcontact;

    	$data = array(
    		'email'=> $request->email,
    		'subject'=> $request->message,
    		);

    	// dd($data);
    	 Mail::send('emails.contacts',$data, function ($m) use ($data) 
    	 {
            $m->from('dinu.shah@gmail.com');

            $m->to($data['email']);
            $m->subject($data['subject']);
        });

         $rep->contact_id = $request->contact_id;
        $rep->email = $request->email;
        $rep->message = $request->message;
        $rep->active = $request->active;
        $rep->save();

    	 session()->flash('success', 'Send Successfully!!');
    	return redirect()->back();
    }

    public function quickmessage(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'message' => 'required',
            'subject' => 'required',
            ]);

        $rep = new QuickMessage;

        $data = array(
            'email'=> $request->email,
            'subject'=> $request->subject,
            'sub' => $request->message,
            );

        // dd($data);
         Mail::send('emails.quick',$data, function ($m) use ($data) 
         {
            $m->from('dinu.shah@gmail.com');

            $m->to($data['email']);
            $m->subject($data['subject']);
        });

        
        $rep->email = $request->email;
        $rep->message = $request->message;
        $rep->subject = $request->subject;
        $rep->save();

         session()->flash('success', 'Send Successfully!!');
        return redirect()->back();
    }
}
