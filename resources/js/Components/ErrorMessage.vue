<script setup>
const props = defineProps({
    message: String,
});
</script>

<template>
    <div v-if="props.message" class="input-error">
        {{ props.message }}
    </div>
</template>
