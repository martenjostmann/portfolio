<template>
    <v-row>
        <v-spacer />
        <v-col md="8" cols="10">
          <p class="text-h4 mt-15">
            Skills
          </p>
          <hr class='title_line' />

          <v-row class="mt-10">
            <v-spacer />
            <v-col md="3" sm="3" cols="5">
              <p class='text-h5'>Python</p>
            </v-col>
            <v-col md="5" sm="5" cols="7">
              <v-progress-linear height="30px" value="95"></v-progress-linear>
            </v-col>
            <v-spacer />
          </v-row>

          <v-row class="mt-10">
            <v-spacer />
            <v-col md="3" sm="3" cols="5">
              <p class='text-h5'>Tensorflow</p>
            </v-col>
            <v-col md="5" sm="5" cols="7">
              <v-progress-linear height="30px" value="80"></v-progress-linear>
            </v-col>
            <v-spacer />
          </v-row>

          <v-row class="mt-10">
            <v-spacer />
            <v-col md="3" sm="3" cols="5">
              <p class='text-h5'>Kubeflow</p>
            </v-col>
            <v-col md="5" sm="5" cols="7">
              <v-progress-linear height="30px" value="45"></v-progress-linear>
            </v-col>
            <v-spacer />
          </v-row>

          <v-row class="mt-10">
            <v-spacer />
            <v-col md="3" sm="3" cols="5">
              <p class='text-h5'>Kubernetes</p>
            </v-col>
            <v-col md="5" sm="5" cols="7">
              <v-progress-linear height="30px" value="30"></v-progress-linear>
            </v-col>
            <v-spacer />
          </v-row>

          <v-row class="mt-10">
            <v-spacer />
            <v-col md="3" sm="3" cols="5">
              <p class='text-h5'>Java</p>
            </v-col>
            <v-col md="5" sm="5" cols="7">
              <v-progress-linear height="30px" value="70"></v-progress-linear>
            </v-col>
            <v-spacer />
          </v-row>

          <v-row class="mt-10">
            <v-spacer />
            <v-col md="3" sm="3" cols="5">
              <p class='text-h5'>Java-Script</p>
            </v-col>
            <v-col md="5" sm="5" cols="7">
              <v-progress-linear height="30px" value="60"></v-progress-linear>
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
</style>