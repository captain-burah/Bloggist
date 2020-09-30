
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script> window.laravel = { csrfToken: '{{ csrf_token() }}' } </script>
  <title>Venture 2021</title>
  
  <!-- CSS -->
  <link rel="stylesheet" href="css/app.css">
  <style>
    .navbar-bg{
      background-color: #339933;
    }
    .bg-wallColor{
      background-color: #ddeeea;
    }
    .sideMenu{
      background-color: #1a1a1a;
      
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header elevation-2 navbar sideMenu navbar-expand navbar-bg navbar-white navbar-dark border-bottom border-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i>&nbsp &nbsp {{ Auth::user()->name }} Dashboard</a>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary sideMenu elevation-4 border-right border-dark">
    <!-- Brand Logo -->
    <a href="{{ url('/home_student') }}" class="brand-link navbar-bg">
      <img src="./img/rocket.png" alt="Larastart" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Venture 2021</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
        <div class="image">
          <img src="./img/user1.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/student_dashboard" class="d-block ">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 bg-transparent">
        <ul class="nav nav-pills nav-sidebar  flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <router-link to="#academy" class="nav-link text-light">
              <i class="nav-icon fas fa-school text-warning"></i>
              <p>
                Academy
                
              </p>
            </router-link>
          </li>
          <li class="nav-item border-bottom border-secondary">
            <router-link to="#studentcast" class="nav-link text-light">
              <i class="nav-icon fas fa-hashtag text-danger"></i>
              <p>
                Studentcast
                
              </p>
            </router-link>
          </li>
          
        <!------ Sub-Menu ----->
        <li class="nav-item">
          <router-link to="/student_dashboard" class="nav-link text-light">
            <i class="nav-icon fas fa-tachometer-alt text-info"></i>
            <p>
              My Dashboard
              
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/lessons" class="nav-link text-light">
            <i class="nav-icon fas fa-book purple"></i>
            <p>
              My Lessons
              
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/exams" class="nav-link text-light">
            <i class="nav-icon fas fa-edit text-warning"></i>
            <p>
              My Exams
              
            </p>
          </router-link>
        </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link text-light ">
              <i class="nav-icon fa fa-cog text-success"></i>
              <p>
                Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <router-link to="/orders" class="nav-link text-light offset-sm-2">
                  <i class="fas fa-users-cog nav-icon yellow"></i>
                  <p>Orders</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/results" class="nav-link text-light offset-sm-2">
                  <i class="fas fa-university nav-icon yellow"></i>
                  <p>Results</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/assignments" class="nav-link text-light offset-sm-2">
                  <i class="fas fa-university nav-icon yellow"></i>
                  <p>Assignments</p>
                </router-link>
              </li>
            </ul>
          </li>
        <!------ Sub-Menu ----->
          <li class="nav-item">
            <router-link to="/profile" class="nav-link text-light">
              <i class="nav-icon fas fa-user orange"></i>
              <p>
                Profile
                
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            
            <a class="nav-link text-light" href="{{ route('logout') }}" 
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                  <i class="nav-icon fa fa-power-off red"></i>
                  <p>
                    {{ __('Logout') }}
                  </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-wallColor">   
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
            <!-- for example router view -->
            <router-view></router-view>
            
            <!-- set progressbar -->
            <vue-progress-bar></vue-progress-bar>
        </div>        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<!-- Main Footer -->
  <footer class="main-footer sideMenu text-secondary pt-2 pb-2 border-top border-secondary text-sm">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Captain_Burah
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020-2021 <a href="#">Venture</a>.</strong> All rights reserved.
  </footer>
<!-- ./Main Footer -->

<!-- REQUIRED SCRIPTS -->

<!-- JS -->
<script src="js/app.js"></script>
</body>
</html>
