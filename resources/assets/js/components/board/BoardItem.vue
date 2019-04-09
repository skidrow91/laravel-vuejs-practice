<template>
  <v-flex xs2>
		<div class="board--item" @click="this.$parent.boardDetail">
			<p><span class="board--item-title">{{title}}</span></p>
		</div>
	</v-flex>
</template>

<script>
export default {
  name: 'BoardItem',
  props: ['title'],
  // methods: {
  //   create: function(){
  //     this.$parent.create();
  //   }
  // }
}
</script>