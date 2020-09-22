
<style lang="scss">
    .side-bar {
        font-size: .85rem;
    }    
</style>

<template>

<div class="wrapper row" id="app">
    <div class="col-md-2 mt-3 p-0">
        <ul class="list-group ">
            <li class="list-group-item py-1 ">
                <router-link to="/Lessons/Overview" class="text-dark">
                <p class="side-bar"> 
                    <i class="fas fa-cog nav-icon text-dark"></i>
                    Overview
                </p>
                </router-link>
            </li>
            <li class="list-group-item py-1">
                <router-link to="/Lessons/Syllabus" class="text-dark">
                <p class="side-bar"> 
                    <i class="fas fa-cog nav-icon text-dark"></i>
                    Syllabus
                </p>
                </router-link>
            </li>
            <li class="list-group-item py-1">
                <router-link to="/Lessons/Analysis" class="text-dark">
                <p class="side-bar"> 
                    <i class="fas fa-cog nav-icon text-dark"></i>
                    Analysis
                </p>
                </router-link>
            </li>
            <li class="list-group-item py-1">
                <router-link to="/CreateLessons" class="text-dark">
                <p class="side-bar"> 
                    <i class="fas fa-cog nav-icon text-dark"></i>
                    Test Button
                </p>
                </router-link>
            </li> 
        </ul>
    </div>


    <div class=" col-md-9 m-0 p-0 bg-wallColor mt-3">   
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid" id="app">
                <!-- for example router view -->
                <router-view ></router-view>
                
                <!-- set progressbar -->
                <vue-progress-bar></vue-progress-bar>
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