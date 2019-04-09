<template>
  <v-container>
    <div class="block-content">
      <div class="block-content__title">
        <h2 class="h2"><span class="h2__title">Create new account</span></h2>
      </div>
      <div class="block-content__login_form">
        <form @submit.prevent="processingForm">
          <div class="field">
            <label>Name</label>
            <input type='text' v-model="name" />
          </div>
          <div class="field">
            <label>Email</label>
            <input type='text' v-model="email" />
          </div>
          <div class="field">
            <label>Password</label>
            <input type='password' v-model="password" />
          </div>
          <div class="field">
            <label>Re-Password</label>
            <input type='password' v-model="password_confirmation" />
          </div>
          <div class="field">
            <button>Register</button>
          </div>
        </form>
      </div>
    </div>
  </v-container>
</template>

<script>
import axios from 'axios';

export default {
  name: 'Signup',
  data() {
    return {
      name: '',
      email: '',
      password: '',
      password_confirmation: ''
    }
  },
  methods: {
    processingForm: function(){
      // alert('test');
      axios.post('http://kanban.local:8888/api/auth/register', {
        name: this.name,
        email: this.email,
        password: this.password,
        password_confirmation: this.password_confirmation,
      }).
      then(response => {
        let token = response.data.token;
        let user = response.data.user;
        localStorage.setItem('token', token);
        localStorage.setItem('user', user);
        this.$router.push({name: 'homepage'})
      })
      .catch(e => {
        console.log('error');
      })
    }
  }
}
</script>