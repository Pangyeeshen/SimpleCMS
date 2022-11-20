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
                    href="mailto:fly.yeeshen@gmail.com"
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
                Organized and motivated developer hoping for a position at a company, 
                where I can apply and make improvement in my skills sets, as well as to make contributions 
                towards the company. Adept with Task Management software like 
                Jira and Git Software like GitHub Desktop and Source Tree.
            </p>
        </div>
    </div>
    <div class="row">
        <div>
            <p>
                Experience : <br />
                
                Software Engineer (June 2021– Present)<br />
                <small>Codon Genomics SDN BHD</small>
            </p>
            <ul>
                <li>Engineered modern applications with C#, Dotnet Core, SQL Server and Vue JS. Built clean codes by following the KISS, YAGNI and DRY principles. </li>
                <li>Collaborate with team member to brainstorm and develop solutions or extensions towards the company’s existing software solutions. </li>
                <li>Liaised with client and product manager to identify and organize product requirements and features to later debrief it to the other team members.</li>
                <li>Reviewed pull request of team members and help ensure that the changes meet the quality standards.</li>
            </ul>

            <p>
                Key achievement : <br />
            </p>
            <ul>
                <li>Optimized the data importation process for the existing software solutions and reduced the duration of importation of 100k records that taken days to compete to minutes. </li>
                <li>Collaborated with team lead to brainstorm and developed features that we first thought was not doable.</li>
            </ul>

            <p>
                Mobile/Web Developer (Oct 2019–May 2021)<br />
                <small>Bravo Net Solution SDN BHD</small>
            </p>
            <ul>
                <li>Handled development of projects with PHP, CSS, HTML, JS, MYSQL, JAVA and VueJs.</li>
                <li>Worked closely with the team members to brainstorm and develop solutions for existing or new projects.</li>
                <li>Assist on solving technical issues faced by other team members.</li>
                <li>Handle server-side integration using LAMP stack for deployment and hosting of web applications.</li>
            </ul>

            
            <p>
                Key achievement : <br />
            </p>
            <ul>
                <li>Enhancements and modifications have been successfully implemented towards projects that increased the overall software quality</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div>
            <p>
                Education : <br />

                Wawasan Open University <br />
                (PRESENT) <br />
                <small>Bachelor of Software Engineering (HONS)</small><br />
                <small>CGPA:</small>
                
                Polytechnic Tuanku Syed Sirajuddin <br />
                (Jun 2016 – December 2018) <br />
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