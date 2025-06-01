<script lang="ts" setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const flashSuccess = computed(() => usePage().props.flash.success);
</script>

<template>
    <Link href="/listing">Listings</Link>&nbsp;
    <Link href="/listing/create">New Listing</Link>

    <div v-if="flashSuccess" class="success">
        {{ flashSuccess }}
    </div>

    <slot>Default</slot>
</template>

<style scoped>
.success {
    background-color: green;
    color: white;
}
</style>

function computed(arg0: () => any) { throw new Error("Function not
implemented."); }
