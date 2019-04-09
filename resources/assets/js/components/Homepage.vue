<template>
  <v-container>
    <div class="block-content">
      <template v-if="this.$store.state.isLogined">
        <Board />
      </template>
      <template v-else>
        <Login />
      </template>
      <!-- <input type='text' v-model='test' />
      <div>
        {{test}}
      </div>
      <div v-if="test=='A'"><h3>ABC</h3></div>
      <div v-else-if="test=='B'"><h3>BC</h3></div>
      <div v-else><h3>C</h3></div> -->
    </div>
  </v-container>
</template>

<script>
import Login from './Login.vue'
import Board from './board/Board.vue'

export default {
  name: 'Homepage',
  components: {
    Login,
    Board
  },
  data() {
    return {
      // isLogined: false,
      test: 'A'
    }
  },
  methods: {
    // isLogined: function(){
    //   if (localStorage.getItem('token')) {
    //     return true;
    //   }
    //   return false;
    // }
  },
  computed: {
    checkLogin: function(){
      if (localStorage.getItem('token')) {
        return true
      }
      return false
    }
  }
  // beforeRouteUpdate: function($to) {
  //   alert('test');
  // },
  // computed: {
  //   isLogined: function(){
  //     if (localStorage.getItem('token')) {
  //       return (this.isLogined=true);
  //     }
  //     return (this.isLogined=false);
  //   }
  // }
}
</script>