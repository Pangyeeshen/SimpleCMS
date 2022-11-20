<template>
  <div class="center mHeight mWeight">
    <div :class="{ hideContainer: showBios  }"  class="container" >
      <div :class="{ popDownThenClose: hideEnvelope  }"  class="text-center">
        <h2 class="white">Click The Envelope</h2>
        <img class="mail" src="/storage/img/mail.png" @click="hideEnv"/>
      </div>
    </div>
    <div :class="{ popOut: showBios, hideScale: !showBios }">
        <i></i>
        <div class="section_8bit text-center">
            <bitbutton 
                :title="bTitle[0]" 
                :size="'eightbit-btn--small'" 
                @changePage="changePage('bio')"
            />
            <bitbutton
                :title="bTitle[1]"
                :color="'eightbit-btn--yellow'"
                :size="'eightbit-btn--small'"
                @changePage="changePage('stats')"
            />
            <bitbutton
                :title="bTitle[2]"
                :color="'eightbit-btn--red'"
                :size="'eightbit-btn--small'"
                @changePage="changePage('medals')"
            />
            <bitbutton
                :title="bTitle[3]"
                :color="'eightbit-btn--blue'"
                :size="'eightbit-btn--small'"
                @changePage="changePage('projects')"
            />
        </div>
        <component  v-bind:is="view" ></component>
      </div>
  </div>
</template>

<script>
import BitButton from './Homepage/Extras/BitButton.vue'
import BioPage from './Homepage/Pages/BioPage.vue'
import MedalsPage from './Homepage/Pages/MedalsPage.vue'
import StatsPage from './Homepage/Pages/StatsPage.vue'
import ProjectsPage from './Homepage/Pages/ProjectsPage.vue'

export default {
  components: {
    bitbutton: BitButton,
    bio: BioPage,
    medals: MedalsPage,
    stats: StatsPage,
    projects: ProjectsPage
  },
  data () {
    return {
      bTitle: ['Bio', 'Stats', 'Medals', 'Projects'],
      view: 'bio',
      showBios: false,
      hideEnvelope: false
    }
  },
  computed: {
    age: function () {
      return Math.floor(
        (new Date() - new Date(1998, 4, 23).getTime()) / 3.15576e10
      )
    },
  },
  methods: {
    changePage(page){
        this.view = page;
    },
    hideEnv(){
      this.hideEnvelope = !this.hideEnvelope;
      setTimeout(() => {
        this.showBio();
      }, 1000);
    },
    showBio(){
      this.showBios = !this.showBios;
    }
  }
}
</script>

<style scoped>
.section_8bit > * {
  margin: 0px 1rem;
}

.mail{
  width: 35%;
  height: 35%;
  cursor: pointer;
}

.container {
  align-items: center;
  display: flex;
  justify-content: center;
  height: 100%;
  width: 100%;
}

.hideContainer{
  display: none;
}

.hideScale{
  display: none;
  transform: scale(0);
}

.mHeight{
  height: 100%;
}

.mWeight{
  width: 100%;
}
</style>
