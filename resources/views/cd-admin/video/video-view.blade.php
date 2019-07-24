@extends('cd-admin.home-master')

<!-- page title -->
@section('page-title')	
View All Video
@endsection


<!-- page content -->
@section('content')

<div class="content-wrapper">
		@if(Session::has('failure'))
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>DELETED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
		</div>
		@elseif(Session::has('success'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>INSERTED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
		</div>

		@elseif(Session::has('success1'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>UPDATED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
		</div>

		@endif
	
<section class="content-header">
		<h1>
			View All Video
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			<li class="active">View All Video</li>
		</ol>
	</section>


<section class="content"> 
	<div class="row">
		<div class="col-md-12">
			<div class="box box-solid">
				<div class="box-header with-border">
					<i class="fa fa-image"></i>

					<h3 class="box-title" style="margin-top: 8px;">Video</h3>
					<a href="{{url('/videos-add')}}"><button type="button" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Add New Video</button></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
	@foreach($video as $video)
		<div class="col-md-4">
			<div class="box box-solid">
				<!-- /.box-header -->
				<div class="row">
					<div class="col-md-4">
						<div class="box-image">

							@if($video->active ==1)
								<div class="label label-success">
				                    <strong>Active</strong>
				                </div>
				                @else
				                <div class="label label-danger">
				                    <strong>InActive</strong>
				                </div>
				                @endif
							<video width="320" height="210" controls preload="none">
							   <source src="{{url('uploads/video/'.$video->video)}}" type="video/mp4">
							  
							</video>
							
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="btn-group" style="margin-top:1px; margin-left: -14px;">
						<button type="button" class="btn btn-sm btn-info">Action</button>
						<button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu" role="menu">

							<li><a href="{{url('edit-videos/'.$video->id)}}"><i class="fa fa-edit"></i>Edit</a></li>

							<li><a href="{{'delete-videos/'.$video->id}}" class=" modal-danger" onclick="return confirm('Are you sure?');"><i class="fa fa-remove" ></i>Delete</a></li>

						</ul>
					</div>
				</div>
				
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		@endforeach
		
	</div>
</section>

@endsection