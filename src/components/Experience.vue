<template>
    <v-row class="experience mt-n2">
        <v-spacer />
        <v-col md="8" cols="10">
          <p class="text-h4 mt-15">
            Berufserfahrung
          </p>
          <hr class='title_line' />

            <v-timeline :dense="$vuetify.breakpoint.smAndDown">

              <v-timeline-item
                large
              >
                <template v-slot:icon>
                  <v-avatar color="white">
                    <img src="../images/experience/viadee.png">
                  </v-avatar>
                </template>
                <template v-slot:opposite>
                  <span>Apr. 2022 - heute</span>
                </template>
                <v-card class="elevation-2">
                  <v-card-title class="text-h5" style="word-break: break-word">
                    Werkstudent - Viadee
                  </v-card-title>
                  <v-card-text class="text-wrap">Als Berater in dem Bereich Data Science erstelle ich vor allem Proof of Concepts für diverse Firmen im Umkreis von Münster. Hierbei sind meine Aufgaben unter anderem die Potenzialanalyse als auch die spätere Umsetzung.</v-card-text>
                </v-card>
              </v-timeline-item>
              
              <v-timeline-item
                large
              >
                <template v-slot:icon>
                  <v-avatar color="white">
                    <img src="../images/experience/viadee.png">
                  </v-avatar>
                </template>
                <template v-slot:opposite>
                  <span>Okt. 2021 - Mär. 2022</span>
                </template>
                <v-card class="elevation-2">
                  <v-card-title class="text-h5" style="word-break: break-word">
                    Intern - Viadee
                  </v-card-title>
                  <v-card-text>Entwicklung eines Produktes, dass Bilder und Schlüsselinformationen in schlecht und vielfältig strukturierten PDF-Dateien erkennt und extrahiert, sowie zu beteiligten Fahrzeugen clustert, um Begutachtungs-Prozesse im Bereich KfZ-Unfallschäden effizienter zu gestalten.</v-card-text>
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
                  <v-card-title class="text-h5" style="word-break: break-word">
                    Freiberuflicher Softwaretest - uTest
                  </v-card-title>
                  <v-card-text>Als Freiberuflicher Softwaretester unterstütze ich Firmen über die Plattform uTest bei der Wartung und Qualitätssicherung, sowie bei der Sicherstellung einer Benutzerfreundlichen Umgebung.</v-card-text>
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
                  <v-card-title class="text-h5" style="word-break: break-word">
                    Projektleiter - Geomi Games
                  </v-card-title>
                  <v-card-text>In diesem Projekt habe ich zusammen mit einem Team aus 15 Personen ein Kartenspiel entwickelt, welches mit der Hilfe einer mobilen Anwendung gespielt werden konnte. In diesem Projekt habe ich das Team organisiert und war leitender Entwickler.</v-card-text>
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