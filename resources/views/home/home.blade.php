@extends('home-master')

<!-- page title -->
@section('page-title')	

@endsection


<!-- page content -->
@section('content')


@include('header.home-header')




<!--  -->
<div class="container home-list-bg">
	<div class="row">
		<a href="{{url('fromnews')}}" class="col-md-4 home-list-card-alt">
			<h5><i class="fas fa-globe-americas"></i> समाचारहरुबाट</h5>		
		</a>
		<a href="{{url('videos')}}" class="col-md-4 home-list-card">
			<h5><i class="fas fa-check-square"></i> भिडियोहरु</h5>
		</a>
		<a href="{{url('events')}}" class="col-md-4 home-list-card-alt">
			<h5><i class="far fa-newspaper"></i> कार्यक्रम</h5>
		</a>
	</div>
</div>






<div class="container padding-tb">
	<div class="row">
		<div class="offset-md-2 col-md-8 home-quote-card">
			<h4>{!!str_limit($about->summary,$limit=500)!!}</h4>
		</div>
	</div>
	<div class="spanbtn">
		<a href="{{url('about')}}"><p>थप पढ्नुहोस</p></a>
	</div>
</div>




<div class="container-fluid padding-tb home-videos-bg">
	<div class="container home-videos-card">
		<h3>भिडियोहरु</h3>
		<div class="row">
		@foreach($video as $video)
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="video-testimonial-block">
					{{-- <div class="video-thumbnail"><img src="{{url('public/images/2.jpg')}}" alt="" class="img-fluid"></div> --}}
					<div class="video">
						<iframe src="{{url('uploads/video/'.$video->video)}}" allowfullscreen controls preload="none">
						</iframe>
					</div>
					{{-- <a href="#" class="video-play"></a> --}}
				</div>
			</div>
			@endforeach
			
		</div>
		<div class="spanbtn">
			<a href="{{url('videos')}}"><p>थप हेर्नुहोस</p></a>
		</div>
	</div>
</div>




<div class="container padding-tb">
	<div class="row">
		<div class="offset-md-2 col-md-8 home-news-body">
			<h3 class="page-title">बालकृष्ण खाँडका लेखहरु</h3>
@foreach($blog as $blog)
			<div class="home-news-card">
				<span>{{$blog->date}}</span>
				<h3>{{$blog->title}}</h3>
				<p>{!!$blog->shortdescription!!}</p>
				<a href="{{url('blog/'.$blog->slug)}}">पुरा पढ्नुहोस</a>
			</div>
@endforeach
		</div>
	</div>
	<div class="spanbtn">
		<a href="{{url('blog')}}"><p>थप पढ्नुहोस</p></a>
	</div>
</div>





<!-- <div class="bd-example">
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item home-carousel-image active">
				<img src="{{url('public/images/1.jpg')}}." class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>First slide label</h5>
				</div>
			</div>
			<div class="carousel-item home-carousel-image">
				<img src="{{url('public/images/1.jpg')}}." class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Second slide label</h5>
				</div>
			</div>
			<div class="carousel-item home-carousel-image">
				<img src="{{url('public/images/1.jpg')}}." class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Third slide label</h5>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div> -->






<section class="experience pt-100 pb-100" id="experience">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 mx-auto text-center">
				<div class="section-title">
					<h3 class="page-title">कार्यक्रम</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<ul class="timeline-list">
					<!-- Single Experience -->
					@foreach($event as $event)
					<li>
						<div class="timeline_content">
							<span>{{$event->startdate}}</span>
							<h4>{{$event->title}}</h4>
							<p>{!!str_limit($event->description,$limit = 500)!!} </p>
						</div>
					</li>
				@endforeach
				</ul>
			</div>
		</div>
		<div class="spanbtn">
			<a href="{{url('events')}}"><p>थप पढ्नुहोस</p></a>
		</div>
	</div>
</section>
@endsection