 @extends('cd-admin.home-master')

 @section('page-title')
 View All Contact
 @endsection

 @section('content')
 <div class="content-wrapper">
  <div class="container">
                @if(Session::has('success') && !empty(Session::get('success')))<br>
                 <div class="col-md-11 label label-success" style="height:25px">{{ Session::get('success')}}</div>
                @endif

                @if($errors->any())
                <div class="alert alert-danger">
                  @foreach($errors->all() as $e)
                    <li>{{$e}}</li>
                  @endforeach
                </div>
              @endif
        </div>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      View All Contact
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
      <li class="active">View All contact</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      @foreach($contact as $inq)
      <div class="col-xs-12">
        <div class="box">
          <div class="box-body">
            <div class="post">
              <div class="user-block col-md-11">
                <img class="img-circle img-bordered-sm" src={{url('public/cd-admin/images/avatar.png')}} alt="user image">
                <span class="username">
                  <a href="#">{{$inq->username}}</a>
                  {{-- <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a> --}}
                <div>
                   <strong><i class="fa  fa-envelope"></i>Email</strong>
                   <p>{{$inq->email}}</p>
                 </div>
                </span>

              </div>
                <?php
            $rep = App\Repliedcontact::where('contact_id',$inq->id)->get();
            $reps = App\Repliedcontact::where('contact_id',$inq->id)->get()->first();
           
            ?>
              
              <div class="user-block">

                    @if($reps->active == 1)
                  
                      <div class="label label-success">
                        <strong> Replied</strong>
                      </div>
                  
                    @else
                     
                      <div class="label label-danger">
                        <strong> Not Replied</strong>
                      </div>
                  
                    
        
                    @endif

      
              </div>
              <p>
                <div>
                <h4>Message Send</h4>
                  @foreach($rep as $reps)
                    <li><b>{{$reps->message}}</b></li>
                  @endforeach
                </div>
              </p>
            
              <!-- /.user-block -->
              <p>
                <div><h4>Message Received</h4><b>{{$inq->message}}</b></div>
              </p>

             


              <form class="form-horizontal" method="post" action="{{url('/contactinsert/'.$inq->id)}}">
                {{csrf_field()}}
                <div class="form-group margin-bottom-none">
                  <div class="col-sm-9">
                  <input type="" name="email" value="{{$inq->email}}" hidden="">
                </div>
                <div class="col-sm-9">
                  <input type="" name="contact_id" value="{{$inq->id}}" hidden="">
                </div>
                  <div class="col-sm-9">
                    <input class="form-control input-sm" name="message" placeholder="Reply" required="">
                  </div>

                <div class="col-sm-3" hidden="">
                  <label>
                    <input type="radio" name="active" value="1" class="flat-red" checked>Yes
                  </label>
                 {{--  <label>
                    <input type="radio" name="active" value="0" class="flat-red" >No
                  </label> --}}
                  
                </div>
               
                  <div class="col-sm-3">
                    <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                  </div>
                </div>
              </form>

            </div>

         
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
</div>
@endsection