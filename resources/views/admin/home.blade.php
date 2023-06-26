<?php
function urLIs($value): bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jong-kran | Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('Admin/dist/css/adminlte.min.css')}}">

    <link rel="stylesheet" href="{{asset('Admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('logo/logo.png')}}" alt="AdminLTELogo" height="100"
             width="100">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark bg-success">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('adminhome')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ ('Log Out') }}
                    </x-dropdown-link>
                </form>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('Admin/')}}dist/img/user1-128x128.jpg" alt="User Avatar"
                                 class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('Admin/')}}dist/img/user8-128x128.jpg" alt="User Avatar"
                                 class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('Admin/')}}dist/img/user3-128x128.jpg" alt="User Avatar"
                                 class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 bg-white">
        <!-- Brand Logo -->
        <a class="nav-brand mx-4"   href="{{ url('/') }}">
            <img height="100" width="180" src="{{asset('')}}" alt="Jong-Kran">
        </a>
        <a href="{{route('adminhome')}}" class="brand-link bg-white">
            <img src="{{asset('/logo/logo.png')}}" alt="Jong-Kran Logo"
                 class="brand-image bg-white" style="opacity: .8">
            <span class="brand-text text-dark font-weight-light bg-white">Jong-Kran</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle elevation-2"
                         alt="{{ Auth::user()->name }}">
                </div>
                <div class="info">
                    <a href="#" class="d-block text-dark">{{ Auth::user()->name }}</a>
                    {{--                    <a href="#" class="d-block">Alexander Pierce</a>--}}
                </div>
            </div>

            {{--            <!-- SidebarSearch Form -->--}}
            {{--            <div class="form-inline">--}}
            {{--                <div class="input-group" data-widget="sidebar-search">--}}
            {{--                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"--}}
            {{--                           aria-label="Search">--}}
            {{--                    <div class="input-group-append">--}}
            {{--                        <button class="btn btn-sidebar">--}}
            {{--                            <i class="fas fa-search fa-fw"></i>--}}
            {{--                        </button>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column text-dark" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('adminhome')}}"  class="nav-link act <?php echo urLIs('/admin/dashboard') ? 'active bg-green' : 'nav-link';?> ">
                            <i class="nav-icon fas fa-th"></i>
                            <p class="text-dark" >
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link bg-gradient-green">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p class="text-dark">
                                Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('addcate')}}" class="nav-link <?php echo urLIs('/admin/category/add') ? 'active bg-green' : 'nav-link';?>">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p class="text-dark">
                                        Add Category
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('addtag')}}" class="nav-link <?php echo urLIs('/admin/tag/add') ? 'active bg-green' : 'nav-link';?>">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p class="text-dark">
                                        Add Tag
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('add-continent')}}" class="nav-link <?php echo urLIs('/admin/add-continent') ? 'active bg-green' : 'nav-link';?>">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p class="text-dark">
                                        Add Continent
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('add-county')}}" class="nav-link <?php echo urLIs('/admin/add-country') ? 'active bg-green' : 'nav-link';?>">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p class="text-dark">
                                        Add Country
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('add-events')}}" class="nav-link <?php echo urLIs('/admin/add-events') ? 'active bg-green' : 'nav-link';?>">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p class="text-dark">
                                        Add Event
                                    </p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link bg-gradient-green">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p class="text-dark">
                                View
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('category')}}" class="nav-link <?php echo urLIs('/admin/category') ? 'active bg-green' : 'nav-link';?>">
                            <i class="nav-icon fas fa-th"></i>
                            <p class="text-dark">
                                Category
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('tag')}}" class="nav-link <?php echo urLIs('/admin/tags') ? 'active bg-green' : 'nav-link';?>">
                            <i class="nav-icon fas fa-th"></i>
                            <p class="text-dark">
                                Tag
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('recipe')}}" class="nav-link <?php echo urLIs('/admin/recipe') ? 'active bg-green' : 'nav-link';?>">
                            <i class="nav-icon fas fa-th"></i>
                            <p class="text-dark">
                                Recipe
                            </p>
                        </a>
                    </li>
                        </ul>
                    </li>


                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link bg-gradient-green">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p class="text-dark">
                                Reviews
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('comment')}}" class="nav-link <?php echo urLIs('/admin/comment') ? 'active bg-green' : 'nav-link';?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p class="text-dark">comment</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('review')}}" class="nav-link <?php echo urLIs('/admin/reviews') ? 'active bg-green' : 'nav-link';?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p class="text-dark">Rating</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('feedback')}}" class="nav-link <?php echo urLIs('/admin/Feedback') ? 'active bg-green' : 'nav-link';?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p class="text-dark">Feedback</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('question')}}" class="nav-link <?php echo urLIs('/admin/question') ? 'active bg-green' : 'nav-link';?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p class="text-dark">Question</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link bg-gradient-green">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p class="text-dark">
                                Others
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('continent')}}" class="nav-link <?php echo urLIs('/admin/continent') ? 'active bg-green' : 'nav-link';?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p class="text-dark">Continent</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('country')}}" class="nav-link <?php echo urLIs('/admin/country') ? 'active bg-green' : 'nav-link';?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p class="text-dark">Country</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('events')}}" class="nav-link <?php echo urLIs('/admin/event') ? 'active bg-green' : 'nav-link';?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p class="text-dark">Event</p>
                                </a>
                            </li>
                        </ul>
                    <li class="nav-item">
                        <a href="{{route('user')}}" class="nav-link <?php echo urLIs('/admin/user') ? 'active bg-green' : 'nav-link';?>">
                            <i class="nav-icon fas fa-th"></i>
                            <p class="text-dark">
                                User
                            </p>
                        </a>
                    </li>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('Admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin/dist/js/adminlte.js')}}"></script>

<!-- DataTables  & Plugins -->
<script src="{{asset('Admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('Admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('Admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('Admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('Admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('Admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('Admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('Admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('Admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('Admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('Admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('Admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('Admin/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('Admin/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('Admin/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('Admin/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('Admin/plugins/chart.js/Chart.min.js')}}"></script>


<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('Admin/dist/js/pages/dashboard2.js')}}"></script>

<!-- Page specific script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>


</body>

</html>
