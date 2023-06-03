<template>
  <div class="container">
    <form>
      <label>email</label><input type="email" v-model="email">
      <label>password</label><input type="password" v-model="password"> 
      <button type="submit" @click.prevent="submitLogin">Log In</button>
    </form>
  </div>
</template>
  
<script>
export default {
 data(){
         return {
             password : '',
             email : '',
         }
     },
     computed:{
         emailError(){
           return !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email)) && this.email.length > 0
         },
         passwordError(){
             return this.password.length > 0 && this.password.length < 7
         },
         isValidForm(){
             return this.password.length > 5 && (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email))
         }
     },
     methods:{
       submitLogin(){
         let {email,password} = this;
           this.$store.dispatch('LoginUser',{email,password})
       }
     }
}
</script>
