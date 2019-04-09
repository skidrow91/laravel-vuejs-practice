<template>
	<div class="board-block">
		<v-container grid-list-md text-xs-center>
			<v-layout row wrap>
        <BoardItem v-for="(item, index) in boards" :key="index" v-bind:title="item.title"/>
        <v-flex xs2>
          <v-dialog v-model="dialog" persistent max-width="600px">
            <template v-slot:activator="{ on }">
              <div class="board--item" v-on="on">
						    <p><span class="board--item-title">Create new board...</span></p>
					    </div>
              <!-- <v-btn color="primary" dark v-on="on">Create new board...</v-btn> -->
            </template>
            <v-card>
              <v-card-title>
                <span class="headline">New Board</span>
              </v-card-title>
              <v-card-text>
                <v-container grid-list-md>
                  <v-layout wrap>
                    <v-flex xs12 sm12 md12>
                      <v-text-field label="Name" required></v-text-field>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-card-text>
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="blue darken-1" flat @click="dialog = false">Close</v-btn>
                <v-btn color="blue darken-1" flat @click="dialog = false">Save</v-btn>
              </v-card-actions>
            </v-card>
          </v-dialog>
				</v-flex>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
import BoardItem from './BoardItem.vue'
export default {
	name: 'Board',
	components: {
		BoardItem
  },
  data: ()=> ({
    boards: [
      {
        title: 'Test1'
      }
    ],
    dialog: false
  }),
	methods: {
		create: function() {
			alert('test');
    },
    boardDetail: function() {
      this.$router.push({name: 'board_detail'});
    }
	}
}
</script>