@extends('home-master')

<!-- page title -->
@section('page-title')	

@endsection


<!-- page content -->
@section('content')


@include('header.header')

<div class="container padding-tb">
	<div class="row">
		<div class="col-md-7 contact-form">
			<h3>कार्यक्रममा भाग लिनुहोस्</h3>
			<p>मुद्रण एप्सम लोरेम उद्योगको लोरेम र उद्योगको लोरेम क्यारेक्टर एक योजना. मुद्रण हो।</p>
			<form>
				<div class="form-group">
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="तपाइको नाम">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="तपाइको थर">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="तपाइको इमेल">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="तपाइको ठेगाना">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="तपाइको फोन नम्बर">
				</div>
				<div class="form-group">
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="तपाइको प्रतिक्रिया"></textarea>
				</div>
				<button type="submit" class="spanbuttonbtn">पठाउनुहोस</button>
			</form>
		</div>
		<div class="offset-md-1 col-md-4">
			<div class="video-testimonial-block">
				<div class="video-thumbnail"><img src="{{url('public/images/2.jpg')}}" alt="" class="img-fluid"></div>
				<div class="video">
					<iframe src="https://www.youtube.com/embed/KEiAVv1UNac" allowfullscreen>
					</iframe>
				</div>
				<a href="#" class="video-play"></a>
			</div>
			<div class="video-testimonial-block">
				<div class="video-thumbnail"><img src="{{url('public/images/2.jpg')}}" alt="" class="img-fluid"></div>
				<div class="video">
					<iframe src="https://www.youtube.com/embed/KEiAVv1UNac" allowfullscreen>
					</iframe>
				</div>
				<a href="#" class="video-play"></a>
			</div>
			<div class="video-testimonial-block">
				<div class="video-thumbnail"><img src="{{url('public/images/2.jpg')}}" alt="" class="img-fluid"></div>
				<div class="video">
					<iframe src="https://www.youtube.com/embed/KEiAVv1UNac" allowfullscreen>
					</iframe>
				</div>
				<a href="#" class="video-play"></a>
			</div>
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



@endsection