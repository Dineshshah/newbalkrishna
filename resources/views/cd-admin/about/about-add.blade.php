@extends('cd-admin.home-master')

@section('page-title')
Add New About
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
            Add New About
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="{{url('/abouts-view')}}">View All About</a></li>
            <li class="active">Add New About</li>
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
                   <form method="post" class="form-horizontal" action="{{url('/abouts-insert')}}" enctype="multipart/form-data">
                {{ csrf_field() }}

                        <div class="box-body">
                         <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                                <label for="inputAvatar3" class="col-sm-4 control-label">Image</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <input class="inputfile inputfile-1" type="file" id="file-1" name="image"  data-multiple-caption="{count} files selected" required="">
                                        <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Upload Image&hellip;</span></label>
                                        <p class="help-block">Upload image for Cover</p>
                                    </div>
                                    @if($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('image')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group {{ $errors->has('altimage') ? 'has-error' : ''}}">
                                <label for="alt" class="col-sm-4 control-label"> Alt Image</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-image"></i>
                                        </div>
                                        <input type="text" class="form-control" id="Altimage" name="altimage" placeholder="" value="{{ old('altimage') }}" required="">
                                    </div>
                                    @if($errors->has('altimage'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('altimage')}}</strong>
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


                            <div class="form-group{{ $errors->has('seo_title') ? ' has-error' : '' }}">
                                <label for="inputVehicleName3" class="col-sm-4 control-label  text-right">seo_title Name</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-file-image-o"></i>
                                        </div>
                                        <input type="text" class="form-control" id="seo_title" name="seo_title" value="{{ old('seo_title') }}" required="">
                                        @if ($errors->has('seo_title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('seo_title') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('seo_keyword') ? ' has-error' : '' }}">
                                <label for="inputVehicleName3" class="col-sm-4 control-label  text-right">seo_keyword Name</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-file-image-o"></i>
                                        </div>
                                        <input type="text" class="form-control" id="seo_keyword" name="seo_keyword" value="{{ old('seo_keyword') }}" required="">
                                        @if ($errors->has('seo_keyword'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('seo_keyword') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            
                            <div class="form-group{{ $errors->has('seo_description') ? ' has-error' : '' }}">
                                <label for="inputDescription3" class="col-sm-4 control-label text-right">seo_description</label>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-pencil"></i>
                                        </div>
                                        <textarea class="form-control" rows="5" id="description" placeholder="Enter seo_description" name="seo_description" required=""></textarea>
                                        @if ($errors->has('seo_description'))
                                                <span class="help-block">
                                                   <strong>{{ $errors->first('seo_description') }}</strong>
                                               </span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                           

                        <!-- /.box-body -->
                        <div class="box-footer col-md-offset-4">
                            <button type="submit" class="btn btn-info">Add About</button>
                           
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



