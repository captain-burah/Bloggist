<template>
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header elevation-2 navbar sideMenu navbar-expand navbar-bg navbar-white navbar-dark border-bottom border-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i>&nbsp; &nbsp; Tutor Dashboard</a>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary sideMenu elevation-4 border-right border-dark">
    <!-- Brand Logo -->
    <a href="/home_tutor" class="brand-link navbar-bg">
      <img src="img/rocket.png" alt="Larastart" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Venture 2021</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
        <div class="image">
          <img src="img/user1.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/tutor" class="d-block "></a>
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
                My Academy
                
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
          <router-link to="/tutor" class="nav-link text-light ">
            <i class="nav-icon fas fa-tachometer-alt text-info"></i>
            <p>
              Dashboard
              
            </p>
          </router-link>
        </li>
        
        <li class="nav-item">
          <router-link to="/Lessons" class="nav-link text-light">
            <i class="nav-icon fas fa-book purple"></i>
            <p>
              My Lessons
              
            </p>
          </router-link>
        </li>
        <li class="nav-item has-treeview ">
          <a href="#" class="nav-link text-light ">
            <i class="nav-icon fa fa-copy text-success"></i>
            <p>
              My Exams
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview ">
            <li class="nav-item">
              <router-link to="createPapers" class="nav-link text-light offset-sm-1">
                <i class="fas fa-angle-right nav-icon text-light"></i>
                <p>Create Paper</p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/categories" class="nav-link text-light offset-sm-1">
                <i class="fas fa-angle-right nav-icon text-light "></i>
                <p>Categories</p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/bank" class="nav-link text-light offset-sm-1">
                <i class="fas fa-angle-right nav-icon text-light "></i>
                <p>Question Bank</p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/examAnalysis" class="nav-link text-light offset-sm-1">
                <i class="fas fa-angle-right nav-icon text-light "></i>
                <p>Exam Analysis</p>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/archive" class="nav-link text-light offset-sm-1">
                <i class="fas fa-angle-right nav-icon  text-light"></i>
                <p>Archive</p>
              </router-link>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <router-link to="/Schedules" class="nav-link text-light">
            <i class="nav-icon fas fa-edit text-warning"></i>
            <p>
              My Schedules
              
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/Layout" class="nav-link text-light">
            <i class="nav-icon fa fa-cog text-success"></i>
            <p>
              Site Layout
              
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/Staff" class="nav-link text-light">
            <i class="fas fa-users-cog nav-icon text-secondary"></i>
            <p>
              Staff Management
              
            </p>
          </router-link>
        </li>
        <!------ Sub-Menu ----->
          <li class="nav-item">
            <router-link to="/tutor/lecProfile" class="nav-link text-light">
              <i class="nav-icon fas fa-user orange"></i>
              <p>
                Profile
                
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            
            <a class="nav-link text-light" href="#" @click.prevent="logout()">
              <i class="nav-icon fa fa-power-off red"></i>
              <p>
                Logout
              </p>
            </a>

            
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
        <div class="container-fluid" id="app">
            <!-- for example router view -->
            <router-view></router-view>
            
            <!-- set progressbar -->
            <vue-progress-bar></vue-progress-bar>
        </div>        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  <!-- /.content -->

  <footer class="main-footer sideMenu text-secondary pt-2 pb-2 border-top border-secondary text-sm">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Captain_Burah
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020-2021 <a href="#">Venture</a>.</strong> All rights reserved.
  </footer>
</div>

</template>
<script>export default {
        name: 'Logout',
        methods: {
            logout() {
                axios.post('/logout')
                    .catch(error => {
                       window.location.href = '/tutor/login';
                    });
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>