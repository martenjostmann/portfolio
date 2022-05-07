<template>

    <v-row class='about'>
      <v-spacer />
      <v-col class="d-none d-md-inline">
        <v-img 
          id="scrolling-techniques-7"
          width="250px"
          :src="require('../images/profile_picture.png')"
          />
      </v-col>
      <v-col md='4' sm='8' cols='10'>
        <p class="text-h4">
          Über mich
        </p>
        <hr class='title_line' />
        <v-content class="mt-5 mb-md-0 mb-10 text-justify">
            Im Rahmen meines Wirtschaftsinformatik Studiums an der WWU habe ich den umfassenden Bereich Data-Science für mich entdeckt.. Das Lösen herausfordernder und spannender Aufgaben und das Entdecken von Zusammenhängen in Daten und Prozessen, die den Kunden voranbringen, sind für mich die treibende Motivation
        </v-content>
        
      </v-col>
      <v-spacer />

    </v-row>
  
        
</template>

<style scoped>
.about{
  margin-top: 100px;
}
.title_line{
  height: 5px;
  width: 70px;
  margin-top: -10px;
  background-color: #42a5f4;
  border: none;
}
</style>