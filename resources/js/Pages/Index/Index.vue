<script lang="ts" setup>
import { ref } from "vue";
const counter = ref(0);
setInterval(() => counter.value++, 1000);
</script>

<template>Hello {{ counter }}</template>
