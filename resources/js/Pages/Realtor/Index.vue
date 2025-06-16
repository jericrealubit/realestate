<script setup>
import Box from "@/Components/UI/Box.vue";
import Price from "@/Components/Price.vue";
import ListingSpace from "@/Components/ListingSpace.vue";

defineProps({ listings: Array });
</script>

<template>
    <h1 class="text-3xl mb-4">Your Listings</h1>
    <section class="mb-4">Filters</section>
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-2">
        <Box v-for="listing in listings" :key="listing.id">
            <div
                class="flex flex-col md:flex-row gap-2 md:items-center justify-between"
            >
                <div>
                    <div class="xl:flex items-center gap-2">
                        <Price :price="listing.price" />
                        <ListingSpace :listing="listing" />
                    </div>
                </div>
                <div>right</div>
            </div>
        </Box>
    </section>
</template>
