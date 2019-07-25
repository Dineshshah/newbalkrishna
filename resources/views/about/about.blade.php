@extends('home-master')

<!-- page title -->
@section('page-title')	
{{$about->seo_title}}
@endsection

@section('seo_keyword')	
{{$about->seo_keyword}}
@endsection

@section('seo_description')	
{{$about->seo_description}}
@endsection
<!-- page content -->
@section('content')


@include('header.header')




<div class="container padding-tb">
	<div class="row">
		<div class="col-md-9 about-text">
			<h3>बालकृष्ण खाँडको बारे</h3>
			
			<div class="container-fluid padding-0">
				<div class="row">

					<div class="col-md-12 col-lg-12">
						<div id="tracking-pre"></div>
						<div id="tracking">
							<div class="tracking-list">
							@foreach($timeline as $time)
								<div class="tracking-item">
									<div class="tracking-icon status-intransit">
										<svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
											<path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
										</svg>
										<!-- <i class="fas fa-circle"></i> -->
									</div>
									<div class="tracking-date">{{$time->date}}</div>
									<div class="tracking-content">{{$time->title}}<span>{!!$time->summary!!}</span></div>
								</div>
								@endforeach
							
							</div>
						</div>
					</div>
				</div>
			</div>

			<img src="{{url('uploads/about/'.$about->image)}}" alt="" class="img-fluid">

			<p>{!!$about->summary!!}</p>

			
		</div>
		<div class="col-md-3 about-article">
			<h3>बालकृष्ण खाँडका लेख</h3>
			<div class="list-group">
			@foreach($blog as $blog)
				<a href="{{url('blog/'.$blog->slug)}}" class="list-group-item list-group-item-action">
					<div class="home-news-card">
						<span>{{$blog->date}}</span>
						<h3>{{$blog->title}}</h3>
						<p>{!!$blog->shortdescription!!}</p>
					</div>
				</a>
				@endforeach
				{{-- <a href="#" class="list-group-item list-group-item-action">
					<div class="home-news-card">
						<span>असार २३, २०७६</span>
						<h3>मुद्रण एप्सम एक क्यारेक्टर योजना सरल एप्सम उद्योगको हो।</h3>
						<p>एक लोरेम एप्सम मुद्रण र डमी लोरेम उद्योगको योजना हो। डमी मुद्रण र लोरेम क्यारेक्टर. क्यारेक्टर मुद्रण लोरेम पाठ एप्सम डमी एप्सम पाठ लोरेम मुद्रण सरल मुद्रण. र सरल एप्सम योजना पाठ योजना र क्यारेक्टर मुद्रण हो। क्यारेक्टर लोरेम एप्सम पाठ हो।</p>
					</div>
				</a>
				<a href="#" class="list-group-item list-group-item-action">
					<div class="home-news-card">
						<span>असार २३, २०७६</span>
						<h3>मुद्रण एप्सम एक क्यारेक्टर योजना सरल एप्सम उद्योगको हो।</h3>
						<p>एक लोरेम एप्सम मुद्रण र डमी लोरेम उद्योगको योजना हो। डमी मुद्रण र लोरेम क्यारेक्टर. क्यारेक्टर मुद्रण लोरेम पाठ एप्सम डमी एप्सम पाठ लोरेम मुद्रण सरल मुद्रण. र सरल एप्सम योजना पाठ योजना र क्यारेक्टर मुद्रण हो। क्यारेक्टर लोरेम एप्सम पाठ हो।</p>
					</div>
				</a> --}}
			</div>
		</div>	
	</div>
</div>


@endsection