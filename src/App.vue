<template>
  <v-app>

  
    <v-app-bar
      fixed
      :elevation="scrollPosition > 50 ? '50' : '0'"
      :color="scrollPosition > 50 ? 'white' : 'transparent'"
    >
      <v-tabs 
        v-model="tab"
        background-color="transparent"
        centered
        :color="scrollPosition > 50 ? 'primary' : 'white'"
      >
          <v-tab @click="scrollMeTo('home')">Home</v-tab>
          <v-tab @click="scrollMeTo('about-me')">Über mich</v-tab>
          <v-tab @click="scrollMeTo('experience')">Berufserfahrung</v-tab>
          <v-tab @click="scrollMeTo('education')">Ausbildung</v-tab>
          <v-tab @click="scrollMeTo('skills')">Skills</v-tab>
          <v-tab @click="scrollMeTo('contact')">Kontakt</v-tab>
       
      </v-tabs>

      <v-spacer></v-spacer>

      <v-btn icon>
        <v-icon 
          :color="scrollPosition > 50 ? 'gray' : 'white'"
        >
          mdi-translate
        </v-icon>
      </v-btn>

    </v-app-bar>

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
    scroll:true
  }),

  methods: {
    handleScroll () {
      this.scrollPosition = window.scrollY
    },

    scrollMeTo(refName) {
        const position = document.getElementById(refName).offsetTop;
          // smooth scroll
          this.scroll=false;
          window.scrollTo({ top: position, behavior: "smooth" });
          this.scroll=true;
    },
    
  }
};
</script>
