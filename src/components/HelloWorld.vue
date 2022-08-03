<template>
  <div>
    <v-img 
    id="scrolling-techniques-7"
    class="d-none d-md-flex"
    width="100%"
    :src="require('../images/header_page.png')"
    />

    <v-img 
    id="scrolling-techniques-7"
    class="d-md-none d-sm-flex"
    width="100%"
    :src="require('../images/header_page_sm.png')"
    />

    <v-row justify="space-around" class="d-md-none d-sm-flex">
      <v-avatar
        color="white"
        size="250"
      >
        <img
          src="../images/profile_picture_bg.jpg"
        >
      
      </v-avatar>
    </v-row>

    <v-row class="mt-lg-n14 mt-md-n9 d-none d-md-flex">
      <v-col md="4" class="welcome_text text-center mt-n6">
        <p class="text-h4 font-weight-light">
           {{ $t('home.hello')}}
        </p>
      </v-col>
      <v-spacer>
      </v-spacer>
      <v-col md="4" class="pl-15 mt-n6">
        <v-btn
          class="ma-2"
          color="primary"
          dark
          href="https://www.linkedin.com/in/marten-jostmann/" target="_blank"
        >
          <v-icon >
            mdi-linkedin  
          </v-icon>
        </v-btn>

        <v-btn
          class="ma-2"
          color="#c9c9c9"
          dark
          href="https://www.xing.com/profile/Marten_Jostmann/cv" target="_blank"
        >
          <img src="https://img.icons8.com/android/20/ffffff/xing.png"/>
        </v-btn>

        <v-btn
          class="ma-2"
          color="#c9c9c9"
          dark
          href="https://github.com/martenjostmann" target="_blank"
        >
          <v-icon>
            mdi-github  
          </v-icon>
        </v-btn>

        <v-btn
          class="ma-2"
          color="#c9c9c9"
          dark
          href="mailto:marten.jostmann@gmail.com"
        >
          <v-icon>
            mdi-email  
          </v-icon>
        </v-btn>
      </v-col>
    </v-row>

    <p class="text-sm-h2 text-h3 text-center mt-8">
      {{ $t('home.name')}}
    </p>
    <p class="text-h4 font-weight-light text-center mt-3">
      {{ $t('home.job')}}
    </p>

    <div class="text-center">
      <v-btn
      class="ma-2"
      outlined
      x-large
      elevation="0"
      color="primary"
      href="mailto:marten.jostmann@gmail.com"
      >
        {{ $t('home.write_me')}}
      </v-btn>

    </div>

  
  </div>
</template>

<style scoped>
.header_image{
  margin-top: -50px;
}
.v-btn:not(.v-btn--round).v-size--default {
  width: 45px;
  height: 45px;
  min-width: 45px;
}

.welcome_text{
  z-index: 2;
}

.social_icons{
  margin-top: -85px;
}

.v-avatar{
  border: 5px solid;
  margin-top: -125px;
}


</style>

<script>
  export default {
    name: 'HelloWorld',

    data: () => ({

    }),
  }
</script>
