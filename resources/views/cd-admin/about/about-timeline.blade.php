@extends('cd-admin.home-master')

@section('page-title')
Add New About TimeLine
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
            Add New About TimeLine
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="{{url('/abouts-view-timeline')}}">View All About TimeLine</a></li>
            <li class="active">Add New About TimeLine</li>
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
                   <form method="post" class="form-horizontal" action="{{url('/abouts-insert-timeline')}}" enctype="multipart/form-data">
                {{ csrf_field() }}

                        <div class="box-body">

                        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="inputTourName3" class="col-sm-4 control-label"> Title</label>
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


                            <div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
                                <label for="alt" class="col-sm-4 control-label">  Date</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control" id="startdate" name="date" placeholder="" value="{{old('date')}}">
                                    </div>
                                    @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                         
                            <div class="form-group {{ $errors->has('summary') ? ' has-error' : '' }}">
                                <label for="inputDescription3" class="col-sm-4 control-label"> Summary</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-pencil"></i>
                                        </div>
                                        <textarea class="form-control" rows="5" id="summernote" placeholder="Enter Description" name="summary" required="">{!!old('summary')!!}</textarea>
                                        
                                    </div>
                                    @if ($errors->has('summary'))
                                          <span class="help-block">
                                           <strong>{{ $errors->first('summary') }}</strong>
                                          </span>
                                        @endif
                                </div>
                            </div>


                           

                        <!-- /.box-body -->
                        <div class="box-footer col-md-offset-4">
                            <button type="submit" class="btn btn-info">Add About TimeLine</button>
                           
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    </form>
                    <div class="box-footer col-md-offset-4">
                        
                        <a href="{{URL()->previous()}}"><button type="submit" class="btn btn-danger">Cancel</button></a>
                    </div>

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



