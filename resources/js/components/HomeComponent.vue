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
              <router-link to="/login">Go to About page</router-link>
            </div>
            <div v-if="loading">Loading...</div>
            <div v-else>
              <div v-for="post in posts" :key="post.id">
                <h2>{{ post.created_at }}</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      loading: true,
      name: "yasser",
      posts: [],
    };
  },
  mounted() {
    axios
      .get("/post")
      .then((response) => {
        this.posts = response.data;
        this.loading =false;
      })
      .catch((error) => {
        console.error(error);
        this.loading = false;
      });
  },
};
</script>

