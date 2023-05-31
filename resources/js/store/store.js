import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    users: [],
  },
  mutations: {
    setUsers(state, users) {
      state.users = users;
    },
  },
  actions: {
    fetchUsers(context) {
      return axios.get('/api/users')
        .then(response => {
          context.commit('setUsers', response.data);
        })
        .catch(error => {
          console.error(error);
        });
    },
  },
  getters: {
    getUsers(state) {
      return state.users;
    },
  },
});
