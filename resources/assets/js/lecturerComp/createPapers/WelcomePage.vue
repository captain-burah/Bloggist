<template>
  <div class="overview">
    <div class="container">
      <div class="intro mb-3">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-6 shadow-sm">
            <h2 class="text-primary headblast">Create Your Examination</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="col-md-6 text-center">
            <img src="/img/svg/xams.svg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="mt-3">
          <router-link to="createPapers/exams" class="text-dark">
            <button type="button" class="btn btn-primary btn-lg btn-block">
              <i class="fas fa-arrow-right"></i>
                &nbsp;
                Let's go when your ready
              </button>
          </router-link>
        </div>
      </div>
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
