<template>
  <div class="header">
    <div class="navigation">
      <v-container account-container>
        <v-layout account-block align-center justify-end row fill-height>
          <ul class="account-block__ul">
            <template v-if="!this.$store.state.isLogined">
              <li v-if="getCurrentRoute().name=='homepage'"><router-link class="link--white" to="/signup">Sign up</router-link></li>
              <li v-if="getCurrentRoute().name=='signup'"><router-link class="link--white" to="/">Login</router-link></li>
            </template>
            <template v-else>
              <li><a href="#" class="link--white" @click="logout">Logout</a></li>
            </template>
          </ul>
        </v-layout>
      </v-container>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
export default {
  name: 'Header',
  methods: {
    getCurrentRoute: function(){
      return this.$route;
    },
    isLogined: function(){
      if (localStorage.getItem('token')) {
        return true;
      }
      return false;
    },
    logout: function(){
      let self = this
      // console.log(localStorage.getItem('token'));
      // return false;
      axios.post('http://kanban.local:8888/api/auth/logout', {
        token: localStorage.getItem('token')
      }).
      then(response => {
        localStorage.removeItem('token')
        localStorage.removeItem('user')
        // this.$parent.reload()
        // this.$forceUpdate()
        this.$store.commit('updateLogin', false)
        this.$router.push({name: 'homepage'})
      })
      .catch(e => {
        console.log('error');
      })
    }
  }
}
</script>