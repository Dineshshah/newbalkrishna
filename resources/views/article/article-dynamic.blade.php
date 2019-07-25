@extends('home-master')

<!-- page title -->
@section('page-title')	
{{$blog->seotitle}}
@endsection


@section('seo_keyword')	
{{$blog->seokeyword}}
@endsection

@section('seo_description')	
{{$blog->seodescription}}
@endsection

<!-- page content -->
@section('content')


@include('header.header')

<div class="container padding-tb">
	<div class="row">
		<div class="offset-md-2 col-md-8 article-dynamic-body">
			<div class="article-dynamic-card">
				<span>{{$blog->date}}</span>
				<h3>{{$blog->title}}</h3>

				<img src="{{url('uploads/blog/'.$blog->image)}}" alt="" class="img-fluid">

				<p>{!!$blog->description!!}</p>
			</div>
		</div>
	</div>
</div>

<hr>

<div class="container padding-tb">
	<div class="row">
		<div class="offset-md-2 col-md-8 article-body">
			<h5>अरु लेखहरु</h5>

			<div class="container-fluid padding-0">
				<div class="row">
				@foreach($blogs as $blogs)
					<div class="col-md-4 article-card">
						<span>{{$blogs->date}}</span>
						<h3>{{$blogs->title}}</h3>
						<p>{!!$blogs->shortdescription!!}</p>
						<a href="{{url('/blog/'.$blogs->slug)}}">पुरा पढ्नुहोस</a>
					</div>
				@endforeach
					{{-- <div class="col-md-4 article-card">
						<span>असार २३, २०७६</span>
						<h3>मुद्रण एप्सम एक क्यारेक्टर योजना सरल एप्सम उद्योगको हो।</h3>
						<p>एक लोरेम एप्सम मुद्रण र डमी लोरेम उद्योगको योजना हो। डमी मुद्रण र लोरेम क्यारेक्टर. क्यारेक्टर मुद्रण लोरेम पाठ एप्सम डमी एप्सम पाठ लोरेम मुद्रण सरल मुद्रण. र सरल एप्सम योजना पाठ योजना र क्यारेक्टर मुद्रण हो।</p>
						<a href="{{url('article-dynamic')}}">पुरा पढ्नुहोस</a>
					</div>

					<div class="col-md-4 article-card">
						<span>असार २३, २०७६</span>
						<h3>मुद्रण एप्सम एक क्यारेक्टर योजना सरल एप्सम उद्योगको हो।</h3>
						<p>एक लोरेम एप्सम मुद्रण र डमी लोरेम उद्योगको योजना हो। डमी मुद्रण र लोरेम क्यारेक्टर. क्यारेक्टर मुद्रण लोरेम पाठ एप्सम डमी एप्सम पाठ लोरेम मुद्रण सरल मुद्रण. र सरल एप्सम योजना पाठ योजना र क्यारेक्टर मुद्रण हो।</p>
						<a href="{{url('article-dynamic')}}">पुरा पढ्नुहोस</a>
					</div> --}}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection