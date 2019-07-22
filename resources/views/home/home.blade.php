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
			<h4>“मुद्रण उद्योगको र उद्योगको सरल उद्योगको लोरेम एप्सम र पाठ क्यारेक्टर एप्सम. एक पाठ उद्योगको क्यारेक्टर उद्योगको लोरेम पाठ उद्योगको .”</h4>
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
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="video-testimonial-block">
					<div class="video-thumbnail"><img src="{{url('public/images/2.jpg')}}" alt="" class="img-fluid"></div>
					<div class="video">
						<iframe src="https://www.youtube.com/embed/KEiAVv1UNac" allowfullscreen>
						</iframe>
					</div>
					<a href="#" class="video-play"></a>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="video-testimonial-block">
					<div class="video-thumbnail"><img src="{{url('public/images/3.jpg')}}" alt="" class="img-fluid"></div>
					<div class="video">
						<iframe src="https://www.youtube.com/embed/KEiAVv1UNac" allowfullscreen>
						</iframe>
					</div>
					<a href="#" class="video-play"></a>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="video-testimonial-block">
					<div class="video-thumbnail"><img src="{{url('public/images/4.jpg')}}" alt="" class="img-fluid"></div>
					<div class="video">
						<iframe src="https://www.youtube.com/embed/KEiAVv1UNac" allowfullscreen>
						</iframe>
					</div>
					<a href="#" class="video-play"></a>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
				<div class="video-testimonial-block">
					<div class="video-thumbnail"><img src="{{url('public/images/5.jpg')}}" alt="" class="img-fluid"></div>
					<div class="video">
						<iframe src="https://www.youtube.com/embed/KEiAVv1UNac" allowfullscreen>
						</iframe>
					</div>
					<a href="#" class="video-play"></a>
				</div>
			</div>
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

			<div class="home-news-card">
				<span>असार २३, २०७६</span>
				<h3>मुद्रण एप्सम एक क्यारेक्टर योजना सरल एप्सम उद्योगको हो।</h3>
				<p>एक लोरेम एप्सम मुद्रण र डमी लोरेम उद्योगको योजना हो। डमी मुद्रण र लोरेम क्यारेक्टर. क्यारेक्टर मुद्रण लोरेम पाठ एप्सम डमी एप्सम पाठ लोरेम मुद्रण सरल मुद्रण. र सरल एप्सम योजना पाठ योजना र क्यारेक्टर मुद्रण हो। क्यारेक्टर लोरेम एप्सम पाठ हो। योजना एक उद्योगको सरल र. मुद्रण उद्योगको र उद्योगको सरल उद्योगको लोरेम एप्सम र पाठ क्यारेक्टर एप्सम. एक पाठ उद्योगको क्यारेक्टर उद्योगको लोरेम पाठ उद्योगको .</p>
				<a href="{{url('article-dynamic')}}">पुरा पढ्नुहोस</a>
			</div>

			<div class="home-news-card">
				<span>असार २३, २०७६</span>
				<h3>मुद्रण एप्सम एक क्यारेक्टर योजना सरल एप्सम उद्योगको हो।</h3>
				<p>एक लोरेम एप्सम मुद्रण र डमी लोरेम उद्योगको योजना हो। डमी मुद्रण र लोरेम क्यारेक्टर. क्यारेक्टर मुद्रण लोरेम पाठ एप्सम डमी एप्सम पाठ लोरेम मुद्रण सरल मुद्रण. र सरल एप्सम योजना पाठ योजना र क्यारेक्टर मुद्रण हो। क्यारेक्टर लोरेम एप्सम पाठ हो। योजना एक उद्योगको सरल र. मुद्रण उद्योगको र उद्योगको सरल उद्योगको लोरेम एप्सम र पाठ क्यारेक्टर एप्सम. एक पाठ उद्योगको क्यारेक्टर उद्योगको लोरेम पाठ उद्योगको .</p>
				<a href="{{url('article-dynamic')}}">पुरा पढ्नुहोस</a>
			</div>

			<div class="home-news-card">
				<span>असार २३, २०७६</span>
				<h3>मुद्रण एप्सम एक क्यारेक्टर योजना सरल एप्सम उद्योगको हो।</h3>
				<p>एक लोरेम एप्सम मुद्रण र डमी लोरेम उद्योगको योजना हो। डमी मुद्रण र लोरेम क्यारेक्टर. क्यारेक्टर मुद्रण लोरेम पाठ एप्सम डमी एप्सम पाठ लोरेम मुद्रण सरल मुद्रण. र सरल एप्सम योजना पाठ योजना र क्यारेक्टर मुद्रण हो। क्यारेक्टर लोरेम एप्सम पाठ हो। योजना एक उद्योगको सरल र. मुद्रण उद्योगको र उद्योगको सरल उद्योगको लोरेम एप्सम र पाठ क्यारेक्टर एप्सम. एक पाठ उद्योगको क्यारेक्टर उद्योगको लोरेम पाठ उद्योगको .</p>
				<a href="{{url('article-dynamic')}}">पुरा पढ्नुहोस</a>
			</div>
		</div>
	</div>
	<div class="spanbtn">
		<a href="{{url('article')}}"><p>थप पढ्नुहोस</p></a>
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
					<li>
						<div class="timeline_content">
							<span>असार २३, २०७६</span>
							<h4>एक लोरेम एप्सम मुद्रण र डमी लोरेम उद्योगको योजना हो।</h4>
							<p>एप्सम हो। एप्सम मुद्रण एक पाठ डमी एक. डमी एप्सम उद्योगको एप्सम लोरेम एप्सम उद्योगको योजना उद्योगको र एक डमी पाठ लोरेम एप्सम लोरेम सरल मुद्रण हो। एक डमी एप्सम. पाठ एप्सम मुद्रण क्यारेक्टर लोरेम पाठ एक डमी एप्सम मुद्रण र पाठ योजना एप्सम. </p>
						</div>
					</li>
					<!-- Single Experience -->
					<li>
						<div class="timeline_content">
							<span>असार २३, २०७६</span>
							<h4>एक लोरेम एप्सम मुद्रण र डमी लोरेम उद्योगको योजना हो।</h4>
							<p>एप्सम हो। एप्सम मुद्रण एक पाठ डमी एक. डमी एप्सम उद्योगको एप्सम लोरेम एप्सम उद्योगको योजना उद्योगको र एक डमी पाठ लोरेम एप्सम लोरेम सरल मुद्रण हो। एक डमी एप्सम. पाठ एप्सम मुद्रण क्यारेक्टर लोरेम पाठ एक डमी एप्सम मुद्रण र पाठ योजना एप्सम. </p>
						</div>
					</li>
					<!-- Single Experience -->
					<li>
						<div class="timeline_content">
							<span>असार २३, २०७६</span>
							<h4>एक लोरेम एप्सम मुद्रण र डमी लोरेम उद्योगको योजना हो।</h4>
							<p>एप्सम हो। एप्सम मुद्रण एक पाठ डमी एक. डमी एप्सम उद्योगको एप्सम लोरेम एप्सम उद्योगको योजना उद्योगको र एक डमी पाठ लोरेम एप्सम लोरेम सरल मुद्रण हो। एक डमी एप्सम. पाठ एप्सम मुद्रण क्यारेक्टर लोरेम पाठ एक डमी एप्सम मुद्रण र पाठ योजना एप्सम. </p>
						</div>
					</li>
					<!-- Single Experience -->
					<li>
						<div class="timeline_content">
							<span>असार २३, २०७६</span>
							<h4>एक लोरेम एप्सम मुद्रण र डमी लोरेम उद्योगको योजना हो।</h4>
							<p>एप्सम हो। एप्सम मुद्रण एक पाठ डमी एक. डमी एप्सम उद्योगको एप्सम लोरेम एप्सम उद्योगको योजना उद्योगको र एक डमी पाठ लोरेम एप्सम लोरेम सरल मुद्रण हो। एक डमी एप्सम. पाठ एप्सम मुद्रण क्यारेक्टर लोरेम पाठ एक डमी एप्सम मुद्रण र पाठ योजना एप्सम. </p>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="spanbtn">
			<a href="{{url('events')}}"><p>थप पढ्नुहोस</p></a>
		</div>
	</div>
</section>
@endsection