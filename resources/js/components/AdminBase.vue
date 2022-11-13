<template>
    <div>
        <sidebar v-model:show="sidebarVisibile" :menus="menus" />
    </div>
</template>

<script>
import Pages from "./Admin/Pages.vue";
import Resources from "./Admin/Resources.vue";
import Sidebar from "./Admin/Sidebar.vue";

export default {
    components: {
        sidebar: Sidebar,
    },
    data() {
        return {
            menus: [
                {
                    name: "Homepage",
                    link: "/home",
                },
                {
                    name: "Pages",
                    link: "/page",
                },
                {
                    name: "Resources",
                    link: "/resources",
                },
            ],
            sidebarVisibile: false,
        };
    },
    mounted() {
        console.log("Component mounted.");
    },
};
</script>
