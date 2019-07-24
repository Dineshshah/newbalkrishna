<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SlugController;
use Illuminate\Support\Facades\Input;

use Session;
use App\Blog;

class BlogController extends Controller
{
	use SlugController;

    public function blogAdd()
    {
    	return view('cd-admin.blog.blog-add');
    }

    public function blogInsert(Request $request)
    {
    	$this->validate($request,[
    		'title' => 'required',
    		'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
    		'altimage' => 'required',
    		'description' => 'required',
    		'shortdescription' => 'required',
    		'seotitle' => 'required',
    		'seokeyword' => 'required',
    		'seodescription' => 'required',
    		]);
    	$blog = new Blog;
    	$blog->title = $request->title;
    	$blog->slug = $this->slug($request->title);
    	$blog->date = $request->date;
    	$blog->altimage = $request->altimage;
    	$blog->description = $request->description;
    	$blog->shortdescription = $request->shortdescription;
    	$blog->active = $request->active;
    	$blog->seotitle = $request->seotitle;
    	$blog->seokeyword = $request->seokeyword;
    	$blog->seodescription = $request->seodescription;

    	if(Input::hasFile('image'))
    	{
    		$file = Input::file('image');
    		$fileName = time().$file->getClientOriginalName();
    		$destinationPath = 'uploads/blog';
    		$file->move($destinationPath,$fileName);
            $blog->image=$fileName;
    	}

    	$blog->save();
    	Session::flash('success');
    	return redirect()->to('blog-view');

    }

    public function blogView()
    {
    	$blog = Blog::orderBy('id','desc')->get();
    	return view('cd-admin.blog.blog-view',compact('blog'));
    }

    public function blogEdit($id)
    {
    	if($blog = Blog::where('id',$id)->get()->first())
    	{
    		return view('cd-admin.blog.blog-edit',compact('blog'));
    	}
    }

    public function blogUpdate(Request $request,$id)
    {
    	if($blog = Blog::where('id',$id)->get()->first())
    	{
    		$this->validate($request,[
    		'title' => 'required',
    		'altimage' => 'required',
    		'description' => 'required',
    		'shortdescription' => 'required',
    		'seotitle' => 'required',
    		'seokeyword' => 'required',
    		'seodescription' => 'required',
    		]);

	    	$blog->title = $request->title;
	    	$blog->slug = $this->slug($request->title);
	    	$blog->date = $request->date;
	    	$blog->altimage = $request->altimage;
	    	$blog->description = $request->description;
	    	$blog->shortdescription = $request->shortdescription;
	    	$blog->active = $request->active;
	    	$blog->seotitle = $request->seotitle;
	    	$blog->seokeyword = $request->seokeyword;
	    	$blog->seodescription = $request->seodescription;

	    	if(Input::hasFile('image'))
	    	{
	    		if ($blog->image && file_exists("uploads/blog/{$blog->image}")) {
                unlink("uploads/blog/{$blog->image}");
        		}
	    		$file = Input::file('image');
	    		$fileName = time().$file->getClientOriginalName();
	    		$destinationPath = 'uploads/blog';
	    		$file->move($destinationPath,$fileName);
	            $blog->image=$fileName;
	    	}

	    	$blog->save();
	    	Session::flash('success1');
	    	return redirect()->to('blog-view');
    	}
    }

    public function blogDelete($id)
    {
    	if($blog = Blog::where('id',$id)->get()->first())
    	{
    		if ($blog->image && file_exists("uploads/blog/{$blog->image}")) {
                unlink("uploads/blog/{$blog->image}");
        		}
        	$blog->delete();
        	Session::flash('failure');
        	return redirect()->to('blog-view');
        }
    }
}
