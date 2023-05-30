<template>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Example Component</div>

            <div class="card-body">
              This home component
              <h1>{{ name }}</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>

  <script>
    import axios from "axios"
  export default {

    data() {
      return {
        name: "yasser"
      };
    },
    mounted() {


        console.log("Component mounted.");
        try {
            axios
          .get("/home")
          .then(res => {
            console.log(res);
        })
        } catch (error) {
console.log(error)
}


    },
    methods: {
      getPosts() {
        axios
          .get("web/setting")
          .then(res => {
            console.log(res);
          })}
        }}
        </script>
