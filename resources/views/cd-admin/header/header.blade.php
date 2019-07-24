<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>BKK</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Bal Krishna Khand</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{url('public/images/5.jpg')}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">Bal Krishna</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{url('public/images/5.jpg')}}" class="img-circle" alt="User Image">

                            <p>
                            <?php $test = App\Admin::where('email',Auth::guard('cd-admin')->user()->email)->get()->first();  ?>
                                {{$test->name}}
                                <small>{{$test->role}}</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            {{-- <div class="pull-left">
                                <a href="#" class="btn btn-info btn-flat">Profile</a>
                            </div> --}}
                            <div class="pull-right">
                                <a href="{{route('adminlogout')}}" class="btn btn-danger btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!-- <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li> -->
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('public/images/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Creatu Developers</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div> -->
        <!-- search form -->
        {{-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form> --}}
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Admin</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li class="active"><a href="{{url('/add-new-admin')}}"><i class="fa fa-circle-o"></i>Add New Admin</a></li> --}}
                    <li><a href="{{url('/view-all-admin')}}"><i class="fa fa-circle-o"></i>View All Admin</a></li>
                </ul>
            </li>

            
            <li class="header">About</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-info"></i> <span>About</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/abouts/add')}}"><i class="fa fa-circle-o"></i>Add New About</a></li>
                    <li><a href="{{url('/abouts')}}"><i class="fa fa-circle-o"></i>View All About</a></li>
                </ul>
            </li>
            {{-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-credit-card"></i> <span>About Card</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/abouts/card/add')}}"><i class="fa fa-circle-o"></i>Add New About card</a></li>
                    <li><a href="{{url('/abouts/card')}}"><i class="fa fa-circle-o"></i>View All About card</a></li>
                </ul>
            </li> --}}
           {{--  <li class="treeview">
                <a href="#">
                    <i class="fa fa-credit-card"></i> <span>Approach</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/approach/add')}}"><i class="fa fa-circle-o"></i>Add New Approach</a></li>
                    <li><a href="{{url('/approachs')}}"><i class="fa fa-circle-o"></i>View All Approach</a></li>
                </ul>
            </li> --}}

             {{-- <li class="header">Slider</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-image"></i> <span>Slider</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('slider/add')}}"><i class="fa fa-circle-o"></i>Add New slider</a></li>
                    <li><a href="{{url('/slider')}}"><i class="fa fa-circle-o"></i>View All slider </a></li>
                </ul>
            </li> --}}

             <li class="header">News</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-copy"></i> <span>News</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/news-add')}}"><i class="fa fa-circle-o"></i>Add New News</a></li>
                    <li><a href="{{url('/news-view')}}"><i class="fa fa-circle-o"></i>View All News </a></li>
                </ul>
            </li>

            <li class="header">Event</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Event</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('events-add')}}"><i class="fa fa-circle-o"></i>Add New Event</a></li>
                    <li><a href="{{url('/events-view')}}"><i class="fa fa-circle-o"></i>View All Event </a></li>
                </ul>
            </li>

            <li class="header">Blog</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Blog</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('blog-add')}}"><i class="fa fa-circle-o"></i>Add New Blog</a></li>
                    <li><a href="{{url('/blog-view')}}"><i class="fa fa-circle-o"></i>View All Blog </a></li>
                </ul>
            </li>

            <li class="header">Contact</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope "></i> <span>Contact</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/contacts/view')}}"><i class="fa fa-circle-o"></i>View All contact </a></li>
                </ul>
            </li>

            <li class="header">Video</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-video-camera"></i> <span>Video</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('videos/add')}}"><i class="fa fa-circle-o"></i>Add New video</a></li>
                    <li><a href="{{url('videos')}}"><i class="fa fa-circle-o"></i>View All videos</a></li>
                </ul>
            </li>
            {{-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-image"></i> <span>Gallery</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/gallerys/add')}}"><i class="fa fa-circle-o"></i>Add New Gallery</a></li>
                    <li><a href="{{url('gallerys')}}"><i class="fa fa-circle-o"></i>View All Gallery</a></li>
                </ul>
            </li> --}}


                {{-- <li class="header">SEO</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-file-text"></i> <span>Home</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{url('homeseo/add')}}"><i class="fa fa-circle-o"></i>Add New Home seo</a></li>
                        <li><a href="{{url('homeseo')}}"><i class="fa fa-circle-o"></i>View Home seo </a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-file-text"></i> <span>About</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{url('aboutseo/add')}}"><i class="fa fa-circle-o"></i>Add New About seo</a></li>
                        <li><a href="{{url('aboutseo')}}"><i class="fa fa-circle-o"></i>View About seo </a></li>
                    </ul>
                </li> --}}
                {{-- <li class="treeview">
                    <a href="#">
                        <i class="fa fa-file-text"></i> <span>Program</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{url('programseo/add')}}"><i class="fa fa-circle-o"></i>Add New Program seo</a></li>
                        <li><a href="{{url('programseo')}}"><i class="fa fa-circle-o"></i>View Program seo </a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-file-text"></i> <span>Event</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{url('eventseo/add')}}"><i class="fa fa-circle-o"></i>Add New Event seo</a></li>
                        <li><a href="{{url('eventseo')}}"><i class="fa fa-circle-o"></i>View Event seo </a></li>
                    </ul>
                </li> --}}

                 

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>