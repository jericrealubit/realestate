<script setup>
import { Link } from "@inertiajs/vue3";
import Box from "@/Components/UI/Box.vue";
import ListingAddress from "@/Components/ListingAddress.vue";
import ListingSpace from "@/Components/ListingSpace.vue";
import Price from "@/Components/Price.vue";
import { useMonthlyPayment } from "@/Composables/useMonthlyPayments";

const props = defineProps({
    listing: Object,
});

const { monthlyPayment } = useMonthlyPayment(props.listing.price, 2.5, 25);
</script>

<template>
    <Box>
        <div>
            <Link :href="route('listing.show', listing.id)">
                <div class="flex items-center gap-1">
                    <Price :price="listing.price" class="text-2xl" />
                    <div class="text-xs text-gray-500">
                        <Price :price="monthlyPayment" /> pm
                    </div>
                </div>
                <ListingSpace :listing="listing" class="text-lg" />
                <ListingAddress :listing="listing" class="text-gray-500" />
            </Link>
        </div>
        <div>
            <Link :href="route('listing.edit', listing.id)">Edit</Link>
        </div>
    </Box>
</template>
