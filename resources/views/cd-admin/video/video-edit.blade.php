@extends('cd-admin.home-master')

@section('page-title')
Edit Video
@endsection


@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Video
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			<li><a href="{{url('/videos-view')}}">View All Video</a></li>
			<li class="active">Edit Video</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header">
						<h3 class="box-title"></h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form class="form-horizontal" method="post" action="{{url('/videos-update/'.$video->id)}}" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="box-body">
							<div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
								<label for="inputTourName3" class="col-sm-4 control-label">Video Title</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Title" name="title" value="{{$video->title}}">
									</div>
									@if(Session::has('success1') && !empty(Session::get('success1')))<br>
										<div class=" col-sm-6 label label-danger" >{{ Session::get('success1')}}</div>

										@endif

										@if($errors->any())
										<div class="alert alert-danger">
											@foreach($errors->all() as $e)
											<li>{{$e}}</li>
											@endforeach
										</div>
										@endif
									@if ($errors->has('title'))
									<span class="help-block">
										<strong>{{ $errors->first('title') }}</strong>
									</span>
									@endif
								</div>
							</div>

							

							<div class="form-group {{ $errors->has('video') ? 'has-error' : ''}}">
								<label for="inputMainImage3" class="col-sm-4 control-label">Main Video</label>
								<div class="col-sm-6">
									<div class="input-group">
										<input class="inputfile inputfile-1" type="file" id="file-1" name="video" data-multiple-caption="{count} files selected"  >
										<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Upload Video&hellip;</span></label>
										<p class="help-block">Upload main video</p>
									</div>
									@if ($errors->has('video'))
									<span class="help-block">
										<strong>{{ $errors->first('video') }}</strong>
									</span>
									@endif
								</div>
							</div>


							<div class="form-group {{ $errors->has('active') ? ' has-error' : '' }}">
								<label for="inputUserType3" class="col-sm-4 control-label">Active</label>
								<div class="col-sm-6">
									<label>
										<input type="radio"{{$video->active == '1' ? 'checked' : ''}} name="active" value="1" class="flat-red" checked>Yes
									</label>
									<label>
										<input type="radio"{{$video->active == '0' ? 'checked' : ''}} name="active" value="0" class="flat-red">No
									</label>
								</div>
								@if ($errors->has('active'))
								<span class="help-block">
									<strong>{{ $errors->first('active') }}</strong>
								</span>
								@endif
							</div>

						</div>
						<!-- /.box-body -->
						<div class="box-footer col-md-offset-4">
							<button type="submit" class="btn btn-info">Update Video </button>
						</div>
					</form>
					<div class="box-footer col-md-offset-4">
						
						<a href="{{URL()->previous()}}"><button type="submit" class="btn btn-danger">Cancel</button></a>
					</div>
					<!-- /.box-footer -->

					<div class="box-header">
						<h3 class="box-title"></h3>
					</div>
				</div>
			</div>
			<!--/.col (right) -->
		</div>
		<!-- /.row -->
	</section>
</div>
@endsection