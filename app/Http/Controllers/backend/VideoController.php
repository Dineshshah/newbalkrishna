<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\SlugController;
use Illuminate\Support\Facades\Input;

use Session;
use App\Video;

class VideoController extends Controller
{
	use SlugController;

    public function videoAdd()
    {
    	return view('cd-admin.video.video-add');
    }

    public function videoInsert(Request $request)
    {
    	$this->validate($request,[
    		'title' => 'required',
    		'video' => 'required|mimes:mp4,mov,ogg,flv,3gp,avi,wmv',
    		]);
    	$video = new Video;
    	$video->title = $request->title;
    	$video->slug = $this->slug($request->title);
    	$video->active = $request->active;

    	if(Input::hasFile('video'))
    	{
    		$file = Input::file('video');
    		$fileName = time().$file->getClientOriginalName();
    		$destinationPath = 'uploads/video';
    		$file->move($destinationPath,$fileName);
    		$video->video=$fileName;
    	}

    	$video->save();
    	Session::flash('success');
    	return redirect()->to('videos-view');
    }

    public function videoView()
    {
    	$video = Video::OrderBy('id','desc')->get();
    	return view('cd-admin.video.video-view',compact('video'));
    }

    public function videoEdit($id)
    {
    	if($video = Video::where('id',$id)->get()->first())
    	{
    		return view('cd-admin.video.video-edit',compact('video'));
    	}
    }

    public function videoUpdate(Request $request,$id)
    {
    	if($video = Video::where('id',$id)->get()->first())
    	{
    		$this->validate($request,[
    		'title' => 'required',
    		'video' => 'mimes:mp4,mov,ogg,flv,3gp,avi,wmv',
    		]);
	    	$video->title = $request->title;
	    	$video->slug = $this->slug($request->title);
	    	$video->active = $request->active;

	    	if(Input::hasFile('video'))
	    	{
	    		if ($video->video && file_exists("uploads/video/{$video->video}")) {
                unlink("uploads/video/{$video->video}");
        		}
	    		$file = Input::file('video');
	    		$fileName = time().$file->getClientOriginalName();
	    		$destinationPath = 'uploads/video';
	    		$file->move($destinationPath,$fileName);
	    		$video->video=$fileName;
	    	}

	    	$video->save();
	    	Session::flash('success1');
	    	return redirect()->to('videos-view');
    	}
    }

    public function videoDelete($id)
    {
    	if($video = Video::where('id',$id)->get()->first())
    	{
			if ($video->video && file_exists("uploads/video/{$video->video}")) {
            unlink("uploads/video/{$video->video}");
    		}
    		$video->delete();
    		Session::flash('failure');
    		return redirect()->to('videos-view');
    	}
    }
}
