<template>
    <v-row class="experience mt-n2">
        <v-spacer />
        <v-col md="8" cols="10">
          <p class="text-h4 mt-15">
            {{ $t('experience.experience')}}
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
                  <span>{{$t('general.april_short')}} 2022 - {{$t('general.today')}}</span>
                </template>
                <v-card class="elevation-2">
                  <v-card-title class="text-h5" style="word-break: break-word">
                    {{ $t('experience.working_student', {company: "Viadee"})}}
                  </v-card-title>
                  <v-card-text class="text-wrap">{{ $t('experience.viadee_working_student_tasks')}}</v-card-text>
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
                  <span>{{$t('general.october_short')}} 2021 - {{$t('general.march_short')}} 2022</span>
                </template>
                <v-card class="elevation-2">
                  <v-card-title class="text-h5" style="word-break: break-word">
                    {{ $t('experience.intern', {company: "Viadee"})}}
                  </v-card-title>
                  <v-card-text>{{ $t('experience.viadee_intern_tasks')}}</v-card-text>
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
                  <span>{{$t('general.october_short')}} 2018 - {{$t('general.today')}}</span>
                </template>
                <v-card class="elevation-2">
                  <v-card-title class="text-h5" style="word-break: break-word">
                    {{ $t('experience.freelance', {company: "uTest"})}}
                  </v-card-title>
                  <v-card-text>{{ $t('experience.utest_freelance_tasks')}}</v-card-text>
                </v-card>
              </v-timeline-item>

              <v-timeline-item
                large
              >
                <template v-slot:icon>
         
                </template>
                <template v-slot:opposite>
                  <span>{{$t('general.august_short')}} 2016 - {{$t('general.august_short')}} 2017</span>
                </template>
                <v-card class="elevation-2">
                  <v-card-title class="text-h5" style="word-break: break-word">
                    {{ $t('experience.project_leader', {company: "Geomi Games"})}}
                  </v-card-title>
                  <v-card-text>{{ $t('experience.geomigames_leader_tasks')}}</v-card-text>
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