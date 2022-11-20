<template>
    <div class="section_8bit" style="padding: 5px">
        <div  v-for="(cert, index) in certs" :key="cert+index" class="text-center img-contrainer">
            <p>{{ cert.title }}</p>
            <img class="certificate" :src="cert.link">
        </div>
    </div>
</template>

<script>
export default {
  data () {
    return {
        certs: [
            { title:'Prosolve 2018', link: '/storage/img/prosolve.jpg'}, 
            { title:'Techcreavery 2018', link: '/storage/img/techcreavery.jpg'}
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
.certificate{
    width: 70%;
    border: 1px solid #fff;
    border-width: 0.125em 0.125em;
    padding: 5px;
}
</style>