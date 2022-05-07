<template>
    <v-row class="contact mt-15">
        <v-spacer />
        <v-col md="8" cols="10">
            <p class="text-h4 mt-15">
            Kontakt
            </p>
            <hr class='title_line' />

            <v-row class="mt-5 mb-5">
                <v-spacer />
                <v-col md=8 class="text-center">
                    <p class="text-h5">
                        Lass uns drüber sprechen
                    </p>
                    <p class="subtile-1 email_sub">
                        marten.jostmann@gmail.com
                    </p>
                </v-col>
                <v-spacer />
            </v-row>
            <v-row class="mb-10">
                <v-spacer class="d-none d-md-flex"/>
                <v-col md="8" class="pl-15 mt-n6 text-center">
                    <v-btn
                    class="ma-2"
                    color="primary"
                    dark
                    href="https://www.linkedin.com/in/marten-jostmann/" target="_blank"
                    >
                    <v-icon x-large>
                        mdi-linkedin  
                    </v-icon>
                    </v-btn>

                    <v-btn
                    class="ma-2"
                    color="#c9c9c9"
                    dark
                    href="https://www.xing.com/profile/Marten_Jostmann/cv" target="_blank"
                    >
                    <img src="https://img.icons8.com/android/32/ffffff/xing.png"/>
                    </v-btn>

                    <v-btn
                    class="ma-2"
                    color="#c9c9c9"
                    dark
                    href="https://github.com/martenjostmann" target="_blank"
                    >
                    <v-icon x-large>
                        mdi-github  
                    </v-icon>
                    </v-btn>

                    <v-btn
                    class="ma-2"
                    color="#c9c9c9"
                    dark
                    href="mailto:marten.jostmann@gmail.com"
                    >
                    <v-icon x-large>
                        mdi-email  
                    </v-icon>
                    </v-btn>
                </v-col>
                <v-spacer class="d-none d-md-flex"/>
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
.contact{
  background: #ebebeb;
}
.v-btn:not(.v-btn--round).v-size--default {
  width: 120px;
  height: 120px;
  min-width: 120px;
}

.email_sub{
  color: gray;
  margin-top: -10px;
}
</style>