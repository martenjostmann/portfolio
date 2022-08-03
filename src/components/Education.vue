<template>
    <v-row>
        <v-spacer />
        <v-col md="8" cols="10">
          <p class="text-h4 mt-15">
            {{$t('education.education')}}
          </p>
          <hr class='title_line' />

          <v-row class="mt-10" >
            <v-spacer class="d-none d-md-flex"/>
            <v-col md="3">
              <v-avatar color="white" size="128">
                <img src="../images/education/wwu.jpg">
              </v-avatar>
            </v-col>
            <v-col class="mt-md-8 mt-n8" md='8' cols='10'>
              <p class='text-md-h4 text-h5'>M.Sc. Information Systems Student</p>
              <p class='text-subtitle-1 education_sub'>{{$t('education.wwu')}} • Apr. 2022 - 2024</p>
            </v-col>
            <v-spacer />
          </v-row>

          <v-divider />

          <v-row>
            <v-spacer class="d-none d-md-flex"/>
            <v-col md="3">
              <v-avatar color="white" size="128">
                <img src="../images/education/wwu.jpg">
              </v-avatar>
            </v-col>
            <v-col class="mt-md-8 mt-n8" md='8' cols='10'>
              <p class='text-md-h4 text-h5'>B.Sc. Wirtschaftsinformatik</p>
              <p class='text-subtitle-1 education_sub'>{{$t('education.wwu')}} • Okt. 2018 - Okt. 2021</p>
            </v-col>
            <v-spacer />
          </v-row>

        </v-col>
        <v-spacer />
      </v-row>
</template>

<style scoped>
.title_line{
  height: 5px;
  width: 70px;
  margin-top: -10px;
  background-color: #42a5f4;
  border: none;
}

.education_sub{
  color: gray;
  margin-top: -10px;
}
</style>