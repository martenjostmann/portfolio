<template>
    <v-row class='about'>
      <v-spacer />
      <v-col md=''>
        <v-img 
          id="scrolling-techniques-7"
          width="250px"
          :src="require('../images/profile_picture.png')"
          />
      </v-col>
      <v-col md='4'>
        <p class="text-h4">
          Über mich
        </p>
        <hr class='title_line' />
        <v-content class="mt-5 text-justify">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </v-content>
        
      </v-col>
      <v-spacer />

    </v-row>
</template>

<style scoped>
.about{
  margin-top: 100px;
}
</style>