<template>
  <div class="boardDetail-block">
    <v-container grid-list-md>
      <v-layout row wrap>
        <v-flex md3>
          <v-card class="tasklist-block board--grey white--text">
            <v-card-title class="tasklist-block--title">
              <div class="tasklist-block--title">Test1</div>
            </v-card-title>
            <v-card class="tasklist--detail">
              <v-card-title class="tasklist--title-block">
                <div class="tasklist--title">Unlimited music now</div>
                <a href="#" class="tasklist--remove-task">remove</a>
              </v-card-title>
            </v-card>
            <v-card class="tasklist--detail">
              <v-card-title class="tasklist--title-block">
                <div class="tasklist--title">Music now</div>
                <a href="#" class="tasklist--remove-task">remove</a>
              </v-card-title>
            </v-card>
            <v-card class="tasklist--newtask">
              <v-card-title class="tasklist--newtask-block">
                <div class="tasklist-newtask-title"> + Add card</div>
              </v-card-title>
            </v-card>
          </v-card>
        </v-flex>
        <v-flex md3>
          <v-card class="tasklist-block board--grey white--text">
            <v-card class="tasklist--detail">
              <v-card-title class="tasklist--title-block">
                <div class="tasklist--title">Music now</div>
                <a href="#" class="tasklist--remove-task">remove</a>
              </v-card-title>
            </v-card>
          </v-card>
        </v-flex>
        <v-flex md3>
          <v-card class="newlist-block white--text">
            <v-card-title class="tasklist--title-block">
              <div class="tasklist--title"> + Add new list</div>
            </v-card-title>
          </v-card>
        </v-flex>
      </v-layout>
    </v-container>
  </div>
</template>

<script>
export default {
  name: 'BoardDetail'
}
</script>