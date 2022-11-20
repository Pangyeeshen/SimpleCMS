<template>
<div class="section_8bit" style="padding: 5px">
    <div class="row">
        <div class="w-25">
            <div
                class="img_corner_8bit"
                style="height: 212px; width: 212px"
            >
                <img class="w-100 h-100" src="img/ethan.jpeg" />
            </div>
            <p style="margin-bottom: 0px">
                <span style="font-size: 1rem"> Contact </span>
            </p>
            <span style="font-size: 1rem">
                <a
                    href="mailto:pangyeeshen2@gmail.com"
                    target="_blank"
                    class="white"
                >
                    <i
                        class="nes-icon size-2x envelope"
                        style="padding-right: 5px"
                    >
                    </i>
                </a>

                <a
                    href="https://www.facebook.com/yeeshen.pang"
                    target="_blank"
                    class="white"
                >
                    <i
                        class="nes-icon size-2x facebook"
                        style="padding-right: 5px"
                    >
                    </i>
                </a>

                <a
                    href="https://github.com/Pangyeeshen"
                    target="_blank"
                    class="white"
                >
                    <i class="nes-icon size-2x github"> </i>
                </a>
            </span>
        </div>
        <div class="w-75" style="padding-left: 15px">
            <p>Name : Pang Yee Shen</p>
            <p>Age : {{ age }}</p>

            <p>
                Address : <br />
                A-17-3A,Taman Green Park Residence,Jalan Green Park
                Residence,Seri Kembangan,Selangor,43300
            </p>
        </div>
        <hr />
    </div>
    <div class="row">
        <div>
            <p>
                Description : <br />
                Organized and motivated developer hoping for a position
                at a company, where I can apply and make improvement in my
                skills sets, to develop great websites, app or system.
            </p>
        </div>
    </div>
    <div class="row">
        <div>
            <p>
                Experience : <br />
                
                Software Engineer (June 2021–May 2022)<br />
                <small>Codon Genomics SDN BHD</small>
            </p>
            <ul>
                <li>Handle development with team member.</li>
                <li>Investigate, diagnosing and debug system bugs.</li>
                <li>Assist on solving technical issues faced by other team members.</li>
            </ul>
            <p>
                Mobile/Web Developer (Oct 2019–May 2021)<br />
                <small>Bravo Net Solution SDN BHD</small>
            </p>
            <ul>
                <li>Handle development of individual programs.</li>
                <li>Investigate, diagnosing and debug system.</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div>
            <p>
                Education : <br />
                
                Polytechnic Tuanku Syed Sirajuddin <br />
                (Jun 2016 – May 2019) <br />
                <small>Diploma in Digital Technologies (Programming)</small><br />
                <small>CGPA: 3.80</small>
            </p>
        </div>
    </div>
</div>
</template>

<script>
export default {
  components: {
  },
  data () {
    return{
        
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
  }
}
</script>

<style scoped>
.row {
    display: flex;
}

.row > div {
    margin: 10px;
}
</style>