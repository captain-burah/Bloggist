
<style lang="scss">
    .side-bar {
        font-size: .85rem;
    }
    .textColor:hover{
        color: #fff;
    }
    .selected:active{
        background: #000;
    }
</style>

<template>

<div class="wrapper row" id="app">

    <div class="col-md-2 mt-3 p-0 mx-0">

        <nav class="navbar .navbar-expand-md navbar-light bg-light">
            
                <ul class="nav flex-column nav-pills mx-auto  text-center">
                    <li class="nav-item active  ">
                        <router-link to="/CreateLessons" class="nav-link ">
                
                            Topics

                        </router-link>  
                    </li>
                    <li class="nav-item ">
                        <router-link to="#files" class="nav-link">
                    
                            Files
                        
                        </router-link>
                    </li>
                    <li class="nav-item ">
                        <router-link to="#videos" class="nav-link">
                    
                            Videos
                        
                        </router-link>
                    </li>
                    <li class="nav-item ">
                        <router-link to="/CreateLessons/Content" class="nav-link">
                    
                            Contents
                        
                        </router-link>
                    </li>
                    <li class="nav-item ">
                        <router-link to="/CreateLessons/Design" class="nav-link">
                    
                            Design
                        
                        </router-link>
                    </li>
                    <li class="nav-item ">
                        <router-link to="#settings" class="nav-link">
                    
                            Settings
                        
                        </router-link>
                    </li>
                </ul>

        </nav>

        
    </div>
    <!-- Tab panes -->
    
<!--

<div class="side-bar navbar navbar-light bg-light">
            <router-link to="/CreateLessons" class="nav-link">
                
                    Topics
               
            </router-link>
            
            <router-link to="#">
                <button type="button" class="list-group-item list-group-item-action">
                    Files
                </button>
            </router-link>

            <router-link to="#">
                <button type="button" class="list-group-item list-group-item-action">
                    Video
                </button>
            </router-link>

            <router-link to="/CreateLessons/Content">
                <button type="button" class="list-group-item list-group-item-action">
                    Content
                </button>
            </router-link>

            <router-link to="/CreateLessons/Design">
                <button type="button" class="list-group-item list-group-item-action">
                    Design
                </button>
            </router-link>

            <router-link to="#">
                <button type="button" class="list-group-item list-group-item-action">
                    Settings
                </button>
            </router-link>
        </div>











    <div class="col-md-2 mt-3 p-0">
        <div class="navbar navbar-dark navbar-dark">
            <ul class="navbar-nav textColor">
                <li class="nav-item py-1  ">
                    <router-link to="/CreateLessons/" class="text-dark nav-link ">
                        <p class="side-bar  m-0 p-0 my-2"> 
                            <i class="fas fa-cog nav-icon "></i>
                            Topics
                        </p>
                    </router-link>
                </li>
                <li class="list-group-item py-1">
                    <router-link to="/CreateLessons/Design" class="text-dark">
                    <p class="side-bar"> 
                        <i class="fas fa-cog nav-icon text-dark"></i>
                        Design
                    </p>
                    </router-link>
                </li>
                <li class="list-group-item py-1">
                    <router-link to="/CreateLessons/Content" class="text-dark">
                    <p class="side-bar"> 
                        <i class="fas fa-cog nav-icon text-dark"></i>
                        Contents
                    </p>
                    </router-link>
                </li>          
            </ul>
        </div>
    </div>
    --->


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