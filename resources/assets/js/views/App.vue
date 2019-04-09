<template>
  <div class="wrapper">
      <Header />
      <div class="mainContent">
        <router-view :key="$route.fullPath"/>
      </div>
      <Footer />
  </div>
</template>

<script>
// import Footer from '../components/Footer.vue';
// const Header = require('../components/Header.vue');
// const Header = require('../components/Header.vue').default;
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';
import Signup from '../components/Signup.vue';
import Homepage from '../components/Homepage.vue';
// const Footer = require('../components/Footer.vue').default;
// const Signup = require('../components/Signup.vue').default;
// const Homepage = require('../components/Homepage.vue').default;

// const router = {
//   path: '/signup', component: Signup,
//   path: '/', component: Login
// }

export default {
  name: 'App',
  components: {
    Header,
    Footer
  },
  methods: {
    reload: function(){
      this.$forceUpdate()
    }
  },
  beforeMount() {
    if (localStorage.getItem('token')) {
      this.$store.commit('updateLogin', true)
    }
    else {
      this.$store.commit('updateLogin', false)
      // this.$route.push({name: 'homepage'})
    }
  },
}
</script>


<style lang='scss'>
@import '../../sass/styles.scss';
</style>