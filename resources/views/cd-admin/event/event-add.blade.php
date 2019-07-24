@extends('cd-admin.home-master')

@section('page-title')
Add New Event
@endsection


@section('content')
<div class="content-wrapper">
@if(Session::has('date'))
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Start Date Is Greater Than End Date!!!</strong> {{ Session::get('message', '') }}
	</div>
	@endif
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Add New Event
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			<li><a href="{{url('/events-view')}}">View All Event</a></li>
			<li class="active">Add New Event</li>
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
					<form class="form-horizontal" method="post" action="{{url('/events-insert')}}" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="box-body">
							<div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
								<label for="inputTourName3" class="col-sm-4 control-label">Event Title</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input type="text" class="form-control" id="inputTourName3" placeholder="Enter Title" name="title" value="{{old('title')}}">
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


							<div class="form-group {{ $errors->has('startdate') ? 'has-error' : ''}}">
								<label for="alt" class="col-sm-4 control-label"> Start Date</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="date" class="form-control" id="startdate" name="startdate" placeholder="" value="{{old('startdate')}}">
									</div>
									@if ($errors->has('startdate'))
									<span class="help-block">
										<strong>{{ $errors->first('startdate') }}</strong>
									</span>
									@endif
								</div>
							</div>

								<div class="form-group {{ $errors->has('enddate') ? 'has-error' : ''}}">
								<label for="alt" class="col-sm-4 control-label"> End Date</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="date" class="form-control" id="enddate" name="enddate" placeholder="" value="{{old('enddate')}}">
									</div>
									@if(Session::has('enddate') && !empty(Session::get('enddate')))<br>
										<div class=" col-sm-6 label label-danger" >{{ Session::get('enddate')}}</div>
										@endif

										@if($errors->any())
										<div class="alert alert-danger">
											@foreach($errors->all() as $e)
											<li>{{$e}}</li>
											@endforeach
										</div>
										@endif
									@if ($errors->has('enddate'))
									<span class="help-block">
										<strong>{{ $errors->first('enddate') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group {{ $errors->has('description') ? 'has-error':''}}">
								<label for="inputDescription3" class="col-sm-4 control-label">Description</label>
								<div class="col-sm-6">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil"></i>
										</div>
										<textarea class="form-control" rows="5" id="summernote" placeholder="Enter Description" name="description" >{!!old('description')!!}</textarea>
										
									</div>
									@if($errors->has('description'))
									<span class="help-block">
										<strong>{{$errors->first('description')}}</strong>
									</span>
									@endif
								</div>
							</div>

						

							<div class="form-group {{ $errors->has('active') ? ' has-error' : '' }}">
								<label for="inputUserType3" class="col-sm-4 control-label">Active</label>
								<div class="col-sm-6">
									<label>
										<input type="radio" name="active" value="1" class="flat-red" checked>Yes
									</label>
									<label>
										<input type="radio" name="active" value="0" class="flat-red">No
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
							<button type="submit" class="btn btn-info">Add Event </button>
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