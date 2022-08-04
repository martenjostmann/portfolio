<template>
  <v-app>

  
    <v-app-bar
      fixed
      :elevation="scrollPosition > 50 ? '50' : '0'"
      :color="scrollPosition > 50 ? 'white' : 'transparent'"
    >
      <v-app-bar-nav-icon @click="drawer = true" 
                           class="d-flex d-md-none"
                           :color="scrollPosition > 50 ? 'gray' : 'white'"
                           ></v-app-bar-nav-icon>
      <v-tabs 
        v-model="tab"
        class="d-none d-md-inline"
        background-color="transparent"
        centered
        :color="scrollPosition > 50 ? 'primary' : 'white'"
      >
          <v-tab v-for="item in menuItems" :key="item.title" @click="scrollMeTo(item.scroll)">
            {{$t(item.title)}}
          </v-tab>
       
      </v-tabs>

      <v-spacer></v-spacer>

      <v-btn icon @click="switchLocale()">
        <v-icon 
          :color="scrollPosition > 50 ? 'gray' : 'white'"
        >
          mdi-translate
        </v-icon>
      </v-btn>
      

    </v-app-bar>

    <v-navigation-drawer
      v-model="drawer"
      absolute
      temporary
      style="position:fixed; top:0; left:0;"
    >
      <v-list
        nav
        dense
      >
        <v-list-item-group
        v-model="tab"
        >
          <v-list-item v-for="item in menuItems" :key="item">
            <v-list-item-title @click="scrollMeTo(item.scroll)">{{$t(item.title)}}</v-list-item-title>
          </v-list-item>

        </v-list-item-group>
      </v-list>
    </v-navigation-drawer> 

    <v-content>
      <section id="home" >
        <HelloWorld />
      </section>
      <section id="about-me">
        <About />
      </section>
      <section id="experience">
        <Experience />
      </section>
      <section id="education">
        <Education />
      </section>
      <section id="skills">
        <Skills />
      </section>
      <section id="contact">
        <Contact />
      </section>
    </v-content>

    <v-footer
    color="primary lighten-1"
    padless
  >
    <v-row
      justify="center"
      no-gutters
    >
      <v-btn
        v-for="link in links"
        :key="link"
        color="white"
        text
        rounded
        class="my-2"
      >
        {{ link }}
      </v-btn>
      <v-col
        class="primary lighten-2 py-4 text-center white--text"
        cols="12"
      >
        {{ new Date().getFullYear() }} — <strong>Marten Jostmann</strong>
      </v-col>
    </v-row>
  </v-footer>
  </v-app>
</template>

<script>
import HelloWorld from './components/HelloWorld';
import About from './components/About';
import Experience from './components/Experience';
import Education from './components/Education';
import Skills from './components/Skills';
import Contact from './components/ContactPage';

export default {
  name: 'App',

  created () {
    window.addEventListener('scroll', this.handleScroll);

  },
  destroyed () {
    window.removeEventListener('scroll', this.handleScroll);
  },
  mounted(){
    const sections = document.querySelectorAll("section");
    window.onscroll = () => {
      var current = "";
      sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        if (scrollY >= sectionTop - 100) {
          current = section.getAttribute("id"); 
}
      });

        if (this.scroll == true){
          if (current == 'home'){
            this.tab = 0
          }else if (current == 'about-me'){
            this.tab = 1
          }else if (current == 'experience') {
            this.tab = 2
          } else if (current == 'education') {
            this.tab = 3
          } else if (current == 'skills') {
            this.tab = 4
          }
        }
          
        
 
    };
  },

  components: {
    HelloWorld,
    About,
    Experience,
    Education,
    Skills,
    Contact,
  },

  data: () => ({
    scrollPosition: null,
    scroll:true,
    drawer: false,
    menuItems: [
      {
        'title': 'Home',
        'scroll': 'home',
      },
      {
        'title': 'header.about_me',
        'scroll': 'about-me',
      },
      {
        'title': 'header.experience',
        'scroll': 'experience',
      },
      {
        'title': 'header.education',
        'scroll': 'education',
      },
      {
        'title': 'header.skills',
        'scroll': 'skills',
      },
      {
        'title': 'header.contact',
        'scroll': 'contact',
      },
    ]

  }),

  methods: {
    handleScroll () {
      this.scrollPosition = window.scrollY
    },

    scrollMeTo(refName) {

        this.drawer = false;

        const position = document.getElementById(refName).offsetTop;
          // smooth scroll
          this.scroll=false;
          window.scrollTo({ top: position, behavior: "smooth" });
          this.scroll=true;
    },

    // switch locales
    switchLocale() {
      if (this.$i18n.locale == "de") {
        this.$i18n.locale = "en"
      }else {
        this.$i18n.locale = "de"
      }
      
    }
    
  }
};
</script>
