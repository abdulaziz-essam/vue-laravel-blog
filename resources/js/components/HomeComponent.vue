<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
          this home component
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){

        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            getPosts(){
               axios.get('api/setting')
               .then(res=>{
                console.log(res)
               })
            }
        }
    }
</script>
