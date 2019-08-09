<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- habilita el jax para poder enviar los datos -->
    <meta content="{{ csrf_token() }}" name="csrf-token">

    <title>Talita-Cumi</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('adminLTE_admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminLTE_admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
   <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('adminLTE_admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/css_admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLTE_admin/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="{{ asset('adminLTE_admin/css/skins/skin-blue.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link rel="stylesheet" href="{{ asset('adminLTE_admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css')}}">
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

 <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('adminLTE_admin/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">

  <link rel="stylesheet" href="{{ asset('adminLTE_admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

  <link rel="stylesheet" href="{{ asset('adminLTE_admin/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">

  <link rel="stylesheet" href="{{ asset('adminLTE_admin/plugins/timepicker/bootstrap-timepicker.min.css')}}">

  <!-- datatable  -->
  <link rel="stylesheet" href="{{ asset('css/dataTables.min.css') }}">


</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">


        <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><img src="{{ asset('imagen_user/logo.png') }}" alt="" width="50"></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><img src="{{ asset('imagen_user/logo.png') }}" alt="" width="50"><b>Talita-Cumi</b></span>
        </a>


        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    
                </ul>
                <ul class="nav navbar-nav">

                    <!-- User Account Menu -->
                    <li class="dropdown user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                           aria-haspopup="true" v-pre>
                            <i class="fas fa-user"></i>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Cerrar sesion
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>


    </header>


    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <p>-</p>
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }} </p>
                </div>
                <br>
             
            </div>


            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menu Principal</li>


                <li class="{{$menus['n1']}}">
                    <a href="{{ route('c_publicacion') }}">
                        <i class="fas fa-file-upload"></i><span> Crear publicacion</span></a></li>

                <li class="{{$menus['n2']}}">
                    <a href="{{ route('c_evento') }}">
                        <i class="fas fa-upload"></i> <span> Crear evento</span></a></li>

                <li class="{{$menus['n3']}}">
                    <a href="{{ route('publicaciones') }}">
                        <i class="fas fa-photo"></i> <span> Ver publicaciones</span></a></li>

                <li class="{{$menus['n4']}}">
                    <a href="{{ route('eventos') }}">
                        <i class="far fa-calendar-times"></i> <span> Ver eventos</span></a></li>


            </ul>
            <!-- /.sidebar-menu -->


        </section>
        <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

    @yield('ubicacion')

    <!-- Main content -->
        <section class="content container-fluid">

            @yield('contenido')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>mi Compañia &copy; 2019 <a href="#">Company</a>.</strong> todos los derechos reservados.
    </footer>


</div>
<!-- ./wrapper -->


<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{{ asset('adminLTE_admin/bower_components/jquery/dist/jquery.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('adminLTE_admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('adminLTE_admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminLTE_admin/js/adminlte.min.js')}}"></script>
<script src="{{ asset('js/js_admin/sweetalert2.min.js')}}"></script>

<!-- editor de texto-->
<script src="{{ asset('adminLTE_admin/bower_components/ckeditor/ckeditor.js')}}"></script>







<!-- bootstrap datepicker -->
<script src="{{ asset('adminLTE_admin/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('adminLTE_admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- datatable -->
<script src="{{ asset('js/js_admin/dataTables.min.js')}}"></script>

@yield('jsextra')

</body>
</html>