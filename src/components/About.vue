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
          Im Rahmen meines Wirtschaftsinformatik Studiums an der WWU habe ich den umfassenden Bereich Data-Science für mich entdeckt. Aktuelle Probleme der Wirtschaftsinformatik und die steigende Verfügbarkeit von Daten erfordern moderne ki-gestützte Lösungsansätze, um die massiven Datenmengen für sich nutzen zu können. 
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