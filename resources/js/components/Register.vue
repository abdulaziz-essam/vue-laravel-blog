<template>
    <div class="container">
      <form >
        <label>first name</label><input type="text" v-model="firstname">
        <div v-show="firstnameError" class="text-danger">
          ... firstname is too short
        </div>
        <label>last name</label><input type="text" v-model="lastname">
        <label>email</label><input type="email" v-model="email">
        <label>password</label><input type="password" v-model="password"> 
        <button type='submit' @click="sumitRegister">submit</button>
        
      </form>
    </div>
  </template>
  
  <script>
  import { computed } from '@vue/reactivity';
  
  export default {
    data() {
      return {
        firstname: '',
        lastname: '',
        email: '',
        password: ''
      }
    },
    methods:{
        sumitRegister(){
console.log("submitted")
    }
}
,
    computed: {
      firstnameError() {
        return this.firstname.length > 0 && this.firstname.length < 4;
      }
    }
  }
  </script>