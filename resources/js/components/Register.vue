<template>
    <div class="container">
      <form method="get">
        <label> name</label><input type="text" v-model="name">
        <div v-show="nameError" class="text-danger">
          ... firstname is too short
        </div>
       
        <label>email</label><input type="email" v-model="email">
        <label>password</label><input type="password" v-model="password"> 
                   <router-link to="/register">submit</router-link>
 
        
      </form>
    </div>
  </template>
  
  <script>
  import { computed } from '@vue/reactivity';
  
  export default {
    data() {
      return {
        name: '',
        email: '',
        password: ''
      }
    },
    methods:{
      sumitRegister(){
    // this.$store.commit('setUserToken',{userToken:'sdmfjsdkfjlsds'})
    //         console.log(this.$store.getters.isLogged)
    let  {name,email,password} = this;
            this.$store.dispatch('RegisterUser',{name,email,password})
    }
}
,
    computed: {
      nameError() {
        return this.name.length > 0 && this.name.length < 4;
      }
    }
  }
  </script>