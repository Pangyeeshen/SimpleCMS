<template>
    <div class="section_8bit" style="padding: 5px">
        <div class="row">
            <p style="margin-bottom: 0px">
                Code
            </p>
        </div>
        <table class="w-100 p-5 table_8bit">
            <thead>
                <tr>
                    <th class="text-left" width="70%">Skill</th>
                    <th width="30%">Rate</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(code, index) in codes" :key="code+index">
                    <td>
                        {{ code.skill }}
                    </td>
                    <td>
                        <img class="rating" :src="showRate(code.rate)">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <p style="margin-bottom: 0px">
                Environments
            </p>
        </div>
        <table class="w-100 p-5 table_8bit">
            <thead>
                <tr>
                    <th class="text-left" width="70%">Environment</th>
                    <th width="30%">Rate</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(environment, index) in environments" :key="environment+index">
                    <td>
                        {{ environment.skill }}
                    </td>
                    <td>
                        <img class="rating" :src="showRate(environment.rate)">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <p style="margin-bottom: 0px">
                Languages
            </p>
        </div>
        <table class="w-100 p-5 table_8bit">
            <thead>
                <tr>
                    <th class="text-left" width="70%">Language</th>
                    <th width="30%">Rate</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(language, index) in languages" :key="language+index">
                    <td>
                        {{ language.skill }}
                    </td>
                    <td>
                        <img class="rating" :src="showRate(language.rate)">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
  data () {
    return {
        codes: [
            { skill:'PHP', rate: 4}, 
            { skill:'Jquery', rate: 3}, 
            { skill:'Laravel', rate: 4}, 
            { skill:'BootStrap', rate: 3}, 
            { skill:'Dotnet', rate: 4},
            { skill:'MYSQL', rate: 4},
            { skill:'MSSQL', rate: 3},
            { skill:'Vue', rate: 4},
            { skill:'Python', rate: 2},
        ],
        environments: [
            { skill:'Window', rate: 3}, 
            { skill:'Linus', rate: 4}, 
        ],
        languages: [
            { skill:'Mandarin', rate: 4}, 
            { skill:'English', rate: 4}, 
            { skill:'Malay', rate: 3}, 
        ],
    }
  },
  computed: {
  },
  methods: {
    showRate(rate){
        let imgPath = '';
        switch(rate){
            case 1:
                imgPath = '/storage/img/one-star.png';
            break
            case 2:
                imgPath = '/storage/img/two-star.png';
            break
            case 3:
                imgPath = '/storage/img/three-star.png';
            break
            case 4:
                imgPath = '/storage/img/four-star.png';
            break
            case 5:
                imgPath = '/storage/img/five-star.png';
            break
        }

        return imgPath
    }
  }
}
</script>

<style scoped>

.rating{
    width: 70%;
}

.row {
    display: flex;
}

.row > div {
    margin: 10px;
}
</style>