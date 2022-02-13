<template>
    <v-row class="experience mt-n2">
        <v-spacer />
        <v-col md="8">
          <p class="text-h4 mt-15">
            Berufserfahrung
          </p>
          <hr class='title_line' />

            <v-timeline>
              
              <v-timeline-item
                large
              >
                <template v-slot:icon>
                  <v-avatar color="white">
                    <img src="../images/experience/viadee.png">
                  </v-avatar>
                </template>
                <template v-slot:opposite>
                  <span>Okt. 2021 - Apr. 2022</span>
                </template>
                <v-card class="elevation-2">
                  <v-card-title class="text-h5">
                    Intern - Viadee
                  </v-card-title>
                  <v-card-text>Lorem ipsum dolor sit amet, no nam oblique veritus. Commune scaevola imperdiet nec ut, sed euismod convenire principes at. Est et nobis iisque percipit, an vim zril disputando voluptatibus, vix an salutandi sententiae.</v-card-text>
                </v-card>
              </v-timeline-item>

              <v-timeline-item
                large
              >
                <template v-slot:icon>
                  <v-avatar color="white">
                    <img src="../images/experience/utest.jpg">
                  </v-avatar>
                </template>
                <template v-slot:opposite>
                  <span>Okt. 2018 - heute</span>
                </template>
                <v-card class="elevation-2">
                  <v-card-title class="text-h5">
                    Freiberuflicher Softwaretest - uTest
                  </v-card-title>
                  <v-card-text>Lorem ipsum dolor sit amet, no nam oblique veritus. Commune scaevola imperdiet nec ut, sed euismod convenire principes at. Est et nobis iisque percipit, an vim zril disputando voluptatibus, vix an salutandi sententiae.</v-card-text>
                </v-card>
              </v-timeline-item>

              <v-timeline-item
                large
              >
                <template v-slot:icon>
         
                </template>
                <template v-slot:opposite>
                  <span>Aug. 2016 - Aug. 2017</span>
                </template>
                <v-card class="elevation-2">
                  <v-card-title class="text-h5">
                    Projektleiter - Geomi Games
                  </v-card-title>
                  <v-card-text>Lorem ipsum dolor sit amet, no nam oblique veritus. Commune scaevola imperdiet nec ut, sed euismod convenire principes at. Est et nobis iisque percipit, an vim zril disputando voluptatibus, vix an salutandi sententiae.</v-card-text>
                </v-card>
              </v-timeline-item>

            </v-timeline>
        </v-col>
        <v-spacer />
      </v-row>
</template>

<style scoped>
.experience{
  background: #ebebeb;
}
.title_line{
  height: 5px;
  width: 70px;
  margin-top: -10px;
  background-color: #42a5f4;
  border: none;
}
</style>