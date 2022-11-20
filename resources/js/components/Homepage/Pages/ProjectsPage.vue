<template>
    <div class="section_8bit" style="padding: 5px">
        <div  v-for="(project, index) in projects" :key="project+index" class="img-contrainer">
            <div class="text-center">
                <p> Project: {{ project.title }}</p>
            </div>
            <div class="row mb-2">
                <div class="col-6 text-center content-center">
                    <img class="project" :src="project.link">
                </div>
                <div class="col-6 description" >
                    <span>
                        {{ project.desc }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  data () {
    return {
        projects: [
            { 
                title:"Auction2U", 
                link: "img/auction2u.jpg",
                desc: "Auction2U is a website that is designed for betting purposes. Auction2U is Malaysia Largest Pre-Loved Luxury Wholesale & Trading House. User of the website will be able to bet on luxury items from jewery to watches that are branded like Celine, Dior, Gucci and more"
            }, 
            { 
                title:"Reskills", 
                link: "img/reskills.jpg",
                desc: "ReSkills was born from a mission to provide accessible and affordable education to people everywhere. It aims to accomplish this through nine exclusive educational programs, each covering a different medium and aspect of online-learning."
            },
            { 
                title:"SawitNow", 
                link: "img/sawitnow.jpg",
                desc: "SawitNow aims to accomplish provide data recording system to the agriculture world in Asia, The website provides date recording function for the Sime Darby to record their seed production process. Like Palms, Trial and more"
            },
            { 
                title:"Darwin", 
                link: "/storage/img/darwin.png",
                desc: "Darwin is a project that deliever a next level data recording to the world, it is not only data recording but the flexibality that it provide to it user to create the workflow, inventory and subject into the system and tied the data to each of these element."
            }

        ]
    }
  },
  computed: {
  },
  methods: {
    
  }
}
</script>

<style scoped>
.project{
    width: 85%;
    border: 1px solid #fff;
    border-width: 0.125em 0.125em;
    padding: 5px;
}

.description{
    letter-spacing: 1px;
}

.content-center{
    margin-top: auto;
    margin-bottom: auto;
}
</style>