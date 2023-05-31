<template>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Example Component</div>

            <div class="card-body">
              This home component
              <h1>{{ name }}</h1>
              <div>
    <h1>Hello, world!</h1>
    <router-link to="/setting">Go to About page</router-link>
  </div>
  <div v-if="loading">Loading...</div>
    <div v-else>
  <div v-for="setting in settings" :key="setting.id">
        <h2>{{ setting.contact_email  }}</h2>
    
    </div>  </div>
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
        loading: true,
        name: "yasser"
,settings:[]      };
    },

        mounted() {
      axios.get('/settings')
        .then(response => {
          this.settings = response.data;
          this.loading = false;
        })
        .catch(error => {
          console.error(error);
          this.loading = false;
        });
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
