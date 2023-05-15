<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <nav style="background-color: brown;color:blue;height: 50px;">
                            <a href="#">Home</a>
                            <a href="#">Departments</a>
                            <a href="#">Courses offered</a>
                            <button @click="logout">Logout</button>
                        </nav>
                    </div>

                    <div class="card-body">
                        I'm an example component.
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
        },

        methods:{
             logout(){
            
            }
        }
    }
</script>
