@extends('home-master')

<!-- page title -->
@section('page-title')	

@endsection


<!-- page content -->
@section('content')


@include('header.header')


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
							<p>{!!$event->description!!} </p>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</section>


@endsection