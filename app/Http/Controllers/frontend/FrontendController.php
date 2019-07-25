<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use App\About;
use App\AboutTimeLine;
use App\Admin;
use App\Blog;
use App\Event;
use App\News;
use App\User;
use App\Video;
use  App\Work;
use Session;
use Carbon\Carbon;
use App\Contact;
use Mail;

class FrontendController extends Controller
{
    public function home()
    {
    	$today = Carbon::now('Asia/Kathmandu')->format('Y-m-d');
    	$about = About::get()->first();
    	$video = Video::where('active','1')->orderBy('id','desc')->get()->take(4);
    	$blog = Blog::where('active','1')->orderBy('id','desc')->get()->take(3);
    	$event = Event::where('active','1')->orderBy('id','desc')->where('enddate','>',$today)->get()->take(4);
    	return view('home.home',compact('about','video','blog','event'));
    }

    public function about()
    {
    	$about = About::get()->first();
    	$timeline = AboutTimeLine::orderBy('id','desc')->get();
    	$blog = Blog::where('active','1')->orderBy('id','desc')->get()->take(3);
    	
    	return view('about.about',compact('about','timeline','blog'));
    }

    public function blog()
    {
    	$blog = Blog::where('active','1')->orderBy('id','desc')->get();
    	return view('article.article',compact('blog'));
    }

    public function blogdetail($slug)
    {
    	$blog = Blog::where('slug',$slug)->where('active','1')->get()->first();
    	$blogs = Blog::where('active','1')->where('slug','!=',$slug)->orderBy('id','desc')->get()->take(3);
    	return view('article.article-dynamic',compact('blog','blogs'));
    }

    public function videos()
    {
    	$video =Video::where('active','1')->orderBy('id','desc')->get();
    	return view('videos.videos',compact('video'));
    }

    public function event()
    {
    	$today = Carbon::now('Asia/Kathmandu')->format('Y-m-d');
    	$event = Event::where('active','1')->orderBy('id','desc')->where('enddate','>',$today)->get();
    	return view('events.events',compact('event'));
    }

    public function work()
    {
    	$work = Work::where('active','1')->orderBy('id','desc')->get();
    	return view('works.works',compact('work'));
    }


    public function news()
    {
    	$news = News::where('active','1')->orderBy('id','desc')->get();
    	return view('fromnews.fromnews',compact('news'));
    }


    public function contact()
    {
    	$video = Video::where('active','1')->orderBy('id','desc')->get()->take(3);
    	return view('contact.contact',compact('video'));
    }

    public function contactsend(Request $request)
    {
    	$this->validate($request,[
    		'email' => 'required',
    		'address' => 'required',
    		'phoneNo' => 'required',
    		'message' => 'required',
    		]);

    	$contact = new Contact;
    	$data = array(
    		'address'=> $request->address,
    		'phone' => $request->phoneNo,
    		'email'=> $request->email,
    		'subject'=> $request->message
    	);

    	Mail::send('emails.contact', $data, function($message) use($data)
    	{
    		$message->from($data['email']);
    		$message->to('dinu.shah99@gmail.com');
    		$message->subject($data['subject']);
    		
    	});
    	
    	$contact->email = $request->email;
    	$contact->address = $request->address;
    	$contact->phoneNo = $request->phoneNo;
    	$contact->message = $request->message;

    	$contact->save();

    	session()->flash('success', 'Send Successfully!!');
    	return redirect()->back()->with('alert', 'SEND SUCCESSFULLY!!!');
    }
}
