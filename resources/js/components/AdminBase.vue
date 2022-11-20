<template>
    <div>
        <sidebar v-model:show="sidebarVisibile" :menus="menus" />
    </div>
</template>

<script>
import AdminSidebar from "./Admin/AdminSidebar.vue";

export default {
    components: {
        sidebar: AdminSidebar,
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
