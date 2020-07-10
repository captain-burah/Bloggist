<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-dark card-default">
                    <div class="card-header">Lesson 's Component</div>

                    <div class="card-body">
                        I'm in the Lesson component.
                    </div>
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
