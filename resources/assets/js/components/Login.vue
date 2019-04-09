<template>
  <div>
    <div class="block-content__title">
      <h2 class="h2"><span class="h2__title">Log in to kanban</span></h2>
      <h3 class="h3"><span class="elm--gray">or</span> <router-link class="link--white" to="/signup">Create an account</router-link></h3>
    </div>
    <div class="block-content__login_form">
      <form @submit.prevent="login()">
        <div class="field">
          <label>Email</label>
          <input type='text' v-model="email" />
        </div>
        <div class="field">
          <label>Password</label>
          <input type='password' v-model="password" />
        </div>
        <div class="field">
          <button>Login In</button>
        </div>
      </form>
      <div class='forgot-password'>
        <a class="link--white" href="#">Forgot your password</a>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'Login',
  data() {
    return {
      email: '',
      password: ''
    }
  },
  methods: {
    login: function() {
      axios.post('http://kanban.local:8888/api/auth/login', {
        email: this.email,
        password: this.password
      })
      .then(response => {
        // console.log(response);
        localStorage.setItem('token', response.data.access_token);
        // localStorage.removeItem('token');
        // localStorage.removeItem('user');
        this.$store.commit('updateLogin', true)
        // this.$router.push({name: 'homepage'});
      })
      .catch(e => {
        console.log('error');
      })
    }
  }
}
</script>