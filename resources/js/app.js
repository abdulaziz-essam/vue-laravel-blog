import { createApp } from 'vue';
import router from './routes/route';
import Vuex from 'vuex';
import axios from 'axios';

const app = createApp({});

const store = Vuex.createStore({
    state: {
        userToken: "azoz"
    },
    getters:{
        isLogged(state){
            //return true if usertoken not empty
            return !!state.userToken
        }
    },
    mutations:{
        setUserToken(state,userToken){
            state.userToken = userToken;
            localStorage.setItem('userToken', JSON.stringify(userToken));
            axios.defaults.headers.common.Authorization = `Bearer ${userToken}`
        },
        removeUserToken(state) {

            state.userToken = null;
            localStorage.removeItem('userToken')
        },
        setUser(state, user) {
            state.user = user
        },
        logout(state) {
            state.userToken = null;
            localStorage.removeItem('userToken');
            window.location.pathname = "/"
        },
        EditPost(state, post) {
            state.EditedPost = post;
        }
    },
    actions: {
        RegisterUser({ commit }, payload) {
            axios.post('/register', payload)
              .then(res => {
                console.log(res)
                commit('setUserToken', res.data.token)
              })
              .catch(err => {
                console.log(err)
              })
          },
          LoginUser({ commit }, payload) {
            axios.post('/login', { email: payload.email, password: payload.password })
              .then(res => {
                console.log(res)
                commit('setUserToken', res.data.token)
                axios.get('/user')
                  .then(res => {
                    //console.log(res.data)
                    commit('setUser', res.data.user)
                  })
              })
              .catch(err => {
                console.log(err)
              })
          },

        }

    

})

app.use(router);
app.use(store);
app.mount('#app');