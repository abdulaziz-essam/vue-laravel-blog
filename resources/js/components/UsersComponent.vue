<template>
    <div>
      <h1>Users:</h1>
      <ul>
        <li v-for="user in users" :key="user.id">
          {{ user.name }}
        </li>
      </ul>
    </div>
  </template>

  <script>
  import { mapActions, mapGetters } from 'vuex';

  export default {
    computed: {
      ...mapGetters(['getUsers']),
      users() {
        return this.getUsers;
      },
    },
    mounted() {
      this.fetchUsers();
    },
    methods: {
      ...mapActions(['fetchUsers']),
    },
  };
  </script>
