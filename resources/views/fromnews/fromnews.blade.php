@extends('home-master')

<!-- page title -->
@section('page-title')	

@endsection


<!-- page content -->
@section('content')


@include('header.header')

<div class="container padding-tb">
	<h3 class="page-title">समाचारहरुबाट</h3>
	<div class="row">
	@foreach($news as $news)
		<div class="col-md-4">
			<div class="fromnews-card">
				<div class="fromnews-image">
					<img src="{{url('uploads/news/'.$news->image)}}" class="card-img-top" alt="...">
				</div>
				<div class="fromnews-body">
					<h5>{{$news->title}}</h5>
					<p>{!!$news->shortdescription!!}</p>
					<a href="{{$news->link}}" class="btn btn-primary">लिङ्कमा जानुहोस</a>
				</div>
			</div>
		</div>
		@endforeach
		
	</div>
</div>
@endsection