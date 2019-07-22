@extends('home-master')

<!-- page title -->
@section('page-title')	

@endsection


<!-- page content -->
@section('content')


@include('header.header')

<div class="container-fluid padding-tb">
	<div class="container home-videos-card">
		<h3>भिडियोहरु</h3>
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
				<div class="video-testimonial-block">
					<div class="video-thumbnail"><img src="{{url('public/images/1.jpg')}}" alt="" class="img-fluid"></div>
					<div class="video">
						<iframe src="https://www.youtube.com/embed/KEiAVv1UNac" allowfullscreen>
						</iframe>
					</div>
					<a href="#" class="video-play"></a>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
				<div class="video-testimonial-block">
					<div class="video-thumbnail"><img src="{{url('public/images/2.jpg')}}" alt="" class="img-fluid"></div>
					<div class="video">
						<iframe src="https://www.youtube.com/embed/KEiAVv1UNac" allowfullscreen>
						</iframe>
					</div>
					<a href="#" class="video-play"></a>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
				<div class="video-testimonial-block">
					<div class="video-thumbnail"><img src="{{url('public/images/3.jpg')}}" alt="" class="img-fluid"></div>
					<div class="video">
						<iframe src="https://www.youtube.com/embed/KEiAVv1UNac" allowfullscreen>
						</iframe>
					</div>
					<a href="#" class="video-play"></a>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
				<div class="video-testimonial-block">
					<div class="video-thumbnail"><img src="{{url('public/images/4.jpg')}}" alt="" class="img-fluid"></div>
					<div class="video">
						<iframe src="https://www.youtube.com/embed/KEiAVv1UNac" allowfullscreen>
						</iframe>
					</div>
					<a href="#" class="video-play"></a>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
				<div class="video-testimonial-block">
					<div class="video-thumbnail"><img src="{{url('public/images/5.jpg')}}" alt="" class="img-fluid"></div>
					<div class="video">
						<iframe src="https://www.youtube.com/embed/KEiAVv1UNac" allowfullscreen>
						</iframe>
					</div>
					<a href="#" class="video-play"></a>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
				<div class="video-testimonial-block">
					<div class="video-thumbnail"><img src="{{url('public/images/2.jpg')}}" alt="" class="img-fluid"></div>
					<div class="video">
						<iframe src="https://www.youtube.com/embed/KEiAVv1UNac" allowfullscreen>
						</iframe>
					</div>
					<a href="#" class="video-play"></a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection