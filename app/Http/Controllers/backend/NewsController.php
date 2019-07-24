<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\SlugController;
use Illuminate\Support\Facades\Input;

use App\News;
use Session;

class NewsController extends Controller
{
	use SlugController;

    public function newsAdd()
    {
    	return view('cd-admin.news.news-add');
    }

    public function newsInsert(Request $request)
    {
    	$this->validate($request,[
    		'title' => 'required',
    		'link' => 'required',
    		'papername' => 'required',
    		'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
    		'shortdescription' => 'required',
    		]);
    	$news = new News;
    	$news->title = $request->title;
    	$news->slug = $this->slug($request->title);
    	$news->link = $request->link;
    	$news->papername = $request->papername;
    	$news->shortdescription = $request->shortdescription;
    	$news->active = $request->active;

    	if(Input::hasFile('image'))
    	{
    		$file = Input::file('image');
    		$fileName = time().$file->getClientOriginalName();
    		$destinationPath = 'uploads/news';
    		$file->move($destinationPath,$fileName);
            $news->image=$fileName;
    	}

    	$news->save();
    	Session::flash('success','News Inserted SuccessFully');
    	return redirect()->to('news-view');
    }

    public function newsView()
    {
    	$news = News::orderBy('id','desc')->get();
    	return view('cd-admin.news.news-view',compact('news'));
    }

    public function newsEdit($id)
    {
    	if($news = News::where('id',$id)->get()->first())
    	{
    		return view('cd-admin.news.news-edit',compact('news'));
    	}
    }

    public function newsUpdate(Request $request,$id)
    {
    	if($news = News::where('id',$id)->get()->first())
    	{
    		$this->validate($request,[
    		'title' => 'required',
    		'link' => 'required',
    		'papername' => 'required',
    		'shortdescription' => 'required',
    		]);

    		$news->title = $request->title;
	    	$news->slug = $this->slug($request->title);
	    	$news->link = $request->link;
	    	$news->papername = $request->papername;
	    	$news->shortdescription = $request->shortdescription;
	    	$news->active = $request->active;

	    	if(Input::hasFile('image'))
	    	{
	    		if ($news->image && file_exists("uploads/news/{$news->image}")) {
                unlink("uploads/news/{$news->image}");
        	} 
	    		$file = Input::file('image');
	    		$fileName = time().$file->getClientOriginalName();
	    		$destinationPath = 'uploads/news';
	    		$file->move($destinationPath,$fileName);
	            $news->image=$fileName;
	    	}

	    	$news->update();
	    	Session::flash('success1','News Inserted SuccessFully');
	    	return redirect()->to('news-view');

    	}
    }

    public function newsDelete($id)
    {
    	if($news = News::where('id',$id)->get()->first())
    	{
    		if($news->image && file_exists("uploads/news/{$news->image}"))
    		{
    			unlink("uploads/news/{$news->image}");
    		}
    		$news->delete();
    		Session::flash('failure');
    		return redirect()->to('news-view');
    	}
    }
}
