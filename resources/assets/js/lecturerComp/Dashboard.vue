<template>
<div>
          <div class="overview pt-5 pb-4">
            <div class="container">
              <div class="intro">
                <div class="row justify-content-center align-items-center">
                  <div class=" text-dark rounded col-md-6">
                    <h2>Home Page</h2>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                  <div class="col-md-6 text-center">
                    <img src="/img/svg/home.svg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>


        <div class="row">
          <div class="col-lg-3 col-6 mt-3 pt-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>

              <div class="icon">
                <ion-icon name="document"></ion-icon>
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6 mt-3 pt-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Growth Analysis</p>
              </div>
              <div class="icon">
                <ion-icon name="bar-chart"></ion-icon>
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6 mt-3 pt-3">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Student Registrations</p>
              </div>
              <div class="icon">
                <ion-icon name="people-circle"></ion-icon>
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6 mt-3 pt-3">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Visitors</p>
              </div>
              <div class="icon">
                <ion-icon name="walk-outline"></ion-icon>
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          </div>
        </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
