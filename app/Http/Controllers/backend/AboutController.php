<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\SlugController;
use Illuminate\Support\Facades\Input;

use Session;
use App\About;

class AboutController extends Controller
{
    public function aboutAdd()
    {
    	return view('cd-admin.about.about-add');
    }

    public function aboutInsert(Request $request)
    {
    	$this->validate($request,[
    		'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
    		'altimage' => 'required',
    		'summary' => 'required',
    		'seo_title' => 'required',
    		'seo_keyword' => 'required',
    		'seo_description' => 'required',
    		]);

    	$about = new About;
    	$about->altimage = $request->altimage;
    	$about->summary = $request->summary;
    	$about->seo_title = $request->seo_title;
    	$about->seo_keyword = $request->seo_keyword;
    	$about->seo_description = $request->seo_description;

    	if(Input::hasFile('image'))
    	{
    		$file = Input::file('image');
    		$fileName = time().$file->getClientOriginalName();
    		$destinationPath = 'uploads/about';
    		$file->move($destinationPath,$fileName);
            $about->image=$fileName;
    	}

    	$about->save();
    	Session::flash('success');
    	return redirect()->to('abouts-view');
    }

    public function aboutView()
    {
    	$about = About::all();
    	return view('cd-admin.about.about-view',compact('about'));
    }

    public function aboutEdit($id)
    {
    	if($about = About::where('id',$id)->get()->first())
    	{
    		return view('cd-admin.about.about-edit',compact('about'));
    	}
    }


    public function aboutUpdate(Request $request,$id)
    {
    	if($about = About::where('id',$id)->get()->first())
    	{
    		$this->validate($request,[
    		'image' => 'mimes:jpeg,png,jpg,gif,svg',
    		'altimage' => 'required',
    		'summary' => 'required',
    		'seo_title' => 'required',
    		'seo_keyword' => 'required',
    		'seo_description' => 'required',
    		]);

	    	$about->altimage = $request->altimage;
	    	$about->summary = $request->summary;
	    	$about->seo_title = $request->seo_title;
	    	$about->seo_keyword = $request->seo_keyword;
	    	$about->seo_description = $request->seo_description;

	    	if(Input::hasFile('image'))
	    	{
	    		if($about->image && file_exists("uploads/about/{$about->image}"))
    			{
    				unlink("uploads/about/{$about->image}");
    			}
	    		$file = Input::file('image');
	    		$fileName = time().$file->getClientOriginalName();
	    		$destinationPath = 'uploads/about';
	    		$file->move($destinationPath,$fileName);
	            $about->image=$fileName;
	    	}

	    	$about->save();
	    	Session::flash('success1');
	    	return redirect()->to('abouts-view');
    	}
    }
}
