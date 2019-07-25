@extends('home-master')

<!-- page title -->
@section('page-title')	

@endsection


<!-- page content -->
@section('content')


@include('header.header')


<div class="container padding-tb">
	<h3 class="page-title">बालकृष्ण खाँडका कार्यहरु</h3>
	@foreach($work as $work)
	<div class="row">
		<div class="offset-md-2 col-md-8 works-card">
			<h3>{{$work->title}}</h3>
			<p>{!!$work->description!!}</p>
			<hr>
		</div>
	</div>
	@endforeach

</div>



@endsection