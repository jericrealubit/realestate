<script setup>
import { useForm, Link } from "@inertiajs/vue3";
import ErrorMessage from "@/Components/ErrorMessage.vue";

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});

const register = () => form.post(route("user-account.store"));
</script>
password
<template>
    <form @submit.prevent="register">
        <div class="w-1/2 mx-auto">
            <div>
                <label for="name" class="label">Your Name</label>
                <input
                    id="name"
                    v-model="form.name"
                    type="text"
                    class="input"
                />
                <ErrorMessage :message="form.errors.name" />
            </div>
            <div class="mt-4">
                <label for="email" class="label">E-mail</label>
                <input
                    id="email"
                    v-model="form.email"
                    type="text"
                    class="input"
                />
                <ErrorMessage :message="form.errors.email" />
            </div>
            <div class="mt-4">
                <label for="password" class="label">Password</label>
                <input
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="input"
                />
                <ErrorMessage :message="form.errors.password" />
            </div>
            <div class="mt-4">
                <label for="password_confirmation" class="label"
                    >Confirm Password</label
                >
                <input
                    id="password_confirmation"
                    v-model="form.password_confirmation"
                    type="password"
                    class="input"
                />
            </div>
            <div class="mt-4">
                <button class="btn-primary w-full" type="submit">
                    Create Account
                </button>

                <div class="mt-2 text-center">
                    <Link
                        :href="route('user-account.create')"
                        class="text-sm text-gray-500"
                    >
                        Need an account? Click here
                    </Link>
                </div>
            </div>
        </div>
    </form>
</template>
