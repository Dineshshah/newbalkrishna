@extends('cd-admin.home-master')

@section('page-title')
View All Admins
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
			View All Admins
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			<li class="active">View All Admins</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<button type="buttom" class="btn btn-info" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>&emsp;Add Admin</button>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>Role</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>

								@foreach($admin as $admin)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$admin->name}}</td>
									
									<td>{{$admin->email}}</td>
									<td>{{$admin->role}}</td>

									<td>
									
										<div class="btn-group">
											<button type="button" class="btn btn-sm btn-info">Action</button>
											<button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown">
												<span class="caret"></span>
												<span class="sr-only">Toggle Dropdown</span>
											</button>
											<ul class="dropdown-menu" role="menu">
												
												<li><a href="#" data-toggle="modal" data-target="#mymodelview{{$admin->id}}" class=" modal-danger" ><i class="fa fa-copy" ></i>view</a></li>

												{{-- <li><a href="{{'editadmin&'.$admin->id}}" class=" modal-danger" ><i class="fa fa-edit" ></i>Edit</a></li> --}}
											
                
                								@if($admin->email == Auth::guard('cd-admin')->user()->email )
               
                								@else
												<li><a href="{{'deleteadmin&'.$admin->id}}" class=" modal-danger" onclick="return confirm('Are you sure?');"><i class="fa fa-remove" ></i>Delete</a></li>
												@endif
												
											</ul>
										</div>
					
									</td>
								</tr>
								@endforeach
								
							</tbody>
							<tfoot>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>Role</th>
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

<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content" >
			<div class="modal-header" style="background-color: #a6ccec;">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" style="text-align: center;">Register Admin</h4>
			</div>
			{{-- <div class="modal-body"> --}}
			<form class="form-horizontal" method="post" action="{{url('admin/insert')}}" onsubmit="return GEEKFORGEEKS()" name="RegForm" enctype="multipart/form-data">
				{!!csrf_field()!!}

				<div class="form-group" style="padding-top: 15px;">
					<label for="inputName3" class="col-sm-3 control-label">Name</label>
					<div class="col-sm-8">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-user"></i>
							</div>
							<input type="text" class="form-control" id="inputName3" placeholder="Enter Full Name" name="name" required="">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="inputName3" class="col-sm-3 control-label">Email</label>
					<div class="col-sm-8">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-pencil"></i>
							</div>
							<input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" required="" onblur="checkMailStatus()">
						</div>
						<span id="error_email"></span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputName3" class="col-sm-3 control-label">Password</label>
					<div class="col-sm-8">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-key	"></i>
							</div>
							<input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required="">
						</div>
						<span id="pass_type"></span>
					</div>
				</div>

				<div class="form-group">
					<label for="inputName3" class="col-sm-3 control-label">Re-Password</label>
					<div class="col-sm-8">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-key	"></i>
							</div>
							<input type="password" class="form-control" id="confirm_password" placeholder="Re-type Password" name="confirm_password" required="">
						</div>
					</div>
				</div>


				<div class="form-group">
					<label for="inputName3" class="col-sm-3 control-label">Address</label>
					<div class="col-sm-8">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-pencil"></i>
							</div>
							<input type="text" class="form-control" id="inputName3" placeholder="Enter Address" name="address" required="">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="inputName3" class="col-sm-3 control-label">Phone No.</label>
					<div class="col-sm-8">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-pencil"></i>
							</div>
							<input type="number" class="form-control" id="inputName3" placeholder="Enter Phone Number" name="phoneNo" required="">
						</div>
					</div>
				</div>



				<div class="modal-footer">
					<button type="submit" name="register" id="register" class="btn btn-info">Add Admin</button>
					<button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>

	</div>
</div>

<!-- model view -->
<?php $test = App\Admin::all(); ?>
@foreach($test as $tes)
<div id="mymodelview{{$tes->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class=" modal-content">
      <div class="modal-header" style="background-color: #a6ccec;">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" style="text-align: center;">Admin Detail</h4>
			</div>
      <div class="modal-body">
        <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{url('public/images/5.jpg')}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{$tes['name']}}</h3>

              <p class="text-muted text-center">{{$tes['position']}}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Name</b> <a class="pull-right">{{$tes['name']}}</a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right">{{$tes['email']}}</a>
                </li>
                <li class="list-group-item">
                  <b>Adress</b> <a class="pull-right">{{$tes['address']}}</a>
                </li>
                <li class="list-group-item">
                  <b>Contact</b> <a class="pull-right">{{$tes['phoneNo']}}</a>
                </li>
               
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


<script> 
	function GEEKFORGEEKS()                                    
	{ 
		var name = document.forms["RegForm"]["name"];               
		var email = document.forms["RegForm"]["email"];    
		var password = document.forms["RegForm"]["password"];  
		var address =  document.forms["RegForm"]["address"];  
		var phoneNo = document.forms["RegForm"]["phoneNo"];   

		if (name.value == "")                                  
		{ 
			window.alert("Please enter your name."); 
			name.focus(); 
			return false; 
		} 

		if (address.value == "")                               
		{ 
			window.alert("Please enter your address."); 
			address.focus(); 
			return false; 
		} 

		if (email.value == "")                                   
		{ 
			window.alert("Please enter a valid e-mail address."); 
			email.focus(); 
			return false; 
		} 

		if (email.value.indexOf("@", 0) < 0)                 
		{ 
			window.alert("Please enter a valid e-mail address."); 
			email.focus(); 
			return false; 
		} 

		if (email.value.indexOf(".", 0) < 0)                 
		{ 
			window.alert("Please enter a valid e-mail address."); 
			email.focus(); 
			return false; 
		} 

		if (phoneNo.value == "")                           
		{ 
			window.alert("Please enter your telephone number."); 
			phoneNo.focus(); 
			return false; 
		} 

		if (password.value == "")                        
		{ 
			window.alert("Please enter your password"); 
			password.focus(); 
			return false; 
		}  

		return true; 
	}
</script>


<script type="text/javascript">
	var password = document.getElementById("password")
	, confirm_password = document.getElementById("confirm_password");

	function validatePassword(){
		if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Passwords Don't Match");
		} else {
			confirm_password.setCustomValidity('');
		}
	}

	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
</script>

<script type="text/javascript">
	function checkMailStatus(){
		var email=$("#email").val();
		$.ajax({
			type:'get',
			url:'{{URL::to('/checkMail')}}',
			data:{email: email},
			success:function(data){
				if(data == "Email exists")
				{
					$('#error_email').html('<label class="text-success"></label>');
					$('#register').attr('disabled', false);
				}
				else
				{
					console.log(data);
					$('#error_email').html('<label class="text-danger">Email not Available</label>');
					 $('#register').attr('disabled', 'disabled');
				}

			}
		});
	}

</script>


<script type="text/javascript">
		$(document).ready(function(){
 $("#password").keyup(function(){
  check_pass();
 });
});

function check_pass()
{
 var val=document.getElementById("password").value;
 console.log(val);
 var meter=document.getElementById("meter");
 var no=0;
 if(val!="")
 {
  // If the password length is less than or equal to 6
  if(val.length>=7)no=1;

 

  if(no==1)
  {
  	
  	$('#pass_type').html('<label class="text-success"></label>');
  	 $('#register').attr('disabled', false);
  }
  else
  {
  	$('#pass_type').html('<label class="text-danger">Week Password</label>');
  	 $('#register').attr('disabled', 'disabled');
  }

 }

 else
 {
  	 // $('#pass_type').html('<label class="text-danger">Week Password</label>');
  	 $('#register').attr('disabled', 'disabled');
 }
}
</script>

@endsection
