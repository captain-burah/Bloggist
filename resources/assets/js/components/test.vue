<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-dark card-default">
                    <div class="card-header bg-primary">Vue Test Component</div>

                    <div class="card-body bg-dark">
                        I'm in the test vue page
                        <ul>
                            <a class="nav-link text-light" :href="about_us">
                                <i class="nav-icon fa fa-power-off red"></i>
                                <p>
                                    Test link
                                </p>
                            </a>
                            <a class="nav-link text-light" :href="login_now">
                                <i class="nav-icon fa fa-power-off red"></i>
                                <p>
                                    Login link
                                </p>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['about_us', 'login_now'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
