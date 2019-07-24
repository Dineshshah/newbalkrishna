@extends('cd-admin.home-master')

@section('page-title')
View All Work
@endsection

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
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			View All Work
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			<li class="active">View All Work</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<a href="{{url('work-add')}}"><button type="buttom" class="btn btn-info" ><i class="fa fa-plus"></i>&emsp;Add Work</button></a>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Title</th>
									<th>Date</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>

								@foreach($work as $work)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$work->title}}</td>
									<td>{{$work->date}}</td>
									<td>
										@if($work->active ==1)
										<div class="label label-success">
						                    <strong>Active</strong>
						                </div>
						                @else
						                <div class="label label-danger">
						                    <strong>InActive</strong>
						                </div>
						                @endif
									</td>

									<td>
									
										<div class="btn-group">
											<button type="button" class="btn btn-sm btn-info">Action</button>
											<button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown">
												<span class="caret"></span>
												<span class="sr-only">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu" role="menu">
												
												<li><a href="#" data-toggle="modal" data-target="#mymodelview{{$work->id}}" class=" modal-danger" ><i class="fa fa-copy" ></i>view</a></li>

												<li><a href="{{'edit-work/'.$work->id}}" class=" modal-danger" ><i class="fa fa-edit" ></i>Edit</a></li>
											
                
												<li><a href="{{'delete-work/'.$work->id}}" class=" modal-danger" onclick="return confirm('Are you sure?');"><i class="fa fa-remove" ></i>Delete</a></li>
												
												
											</ul>
										</div>
					
									</td>
								</tr>
								@endforeach
								
							</tbody>
							<tfoot>
								<tr>
									<th>ID</th>
									<th>Title</th>
									<th>Date</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
</div>

<!-- Modal -->
<!-- model view -->
<?php $test = App\Work::all(); ?>
@foreach($test as $tes)
<div id="mymodelview{{$tes->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class=" modal-content">
      <div class="modal-header" style="background-color: #a6ccec;">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" style="text-align: center;">Work Detail</h4>
			</div>
      <div class="modal-body">
        <div class="box-body box-profile">
             
              <p></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Title</b> <a class="pull-right">{{$tes['title']}}</a>
                </li>
                <li class="list-group-item">
                  <b>Date</b> <a class="pull-right">{{$tes['date']}}</a>
                </li>

                <p class="text-muted text-center">{!!$tes['description']!!}</p>
                
               
              </ul>

              {{-- <a href="#" class="btn btn-primary btn-block"><b>View Detail</b></a> --}}
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endforeach




<div  class="example-modal">
	<div id="delete-modal" class="modal modal-danger">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Delete User</h4>
				</div>
				<div class="modal-body">
					<p>Are You Sure You Want to Delete This</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-outline">Delete</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
</div>
<!-- /.example-modal -->



@endsection
