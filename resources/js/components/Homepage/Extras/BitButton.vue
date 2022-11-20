<template>
    <button :class="buttonCss" type="button" @click="$emit('changePage')">
        {{ title }}
    </button>
</template>

<script>
export default {
    props: {
        title: String,
        color: {
            type: String,
            default: "",
        },
        size: {
            type: String,
            default: "",
        },
        page: {
            type: String,
            default: "",
        },
    },
    computed: {
        // a computed getter
        buttonCss() {
            var css = [];
            css.push("eightbit-btn");
            css.push(this.color);
            css.push(this.size);

            // `this` points to the vm instance
            return css.join(" ");
        },
    },
};
</script>

<style></style>
