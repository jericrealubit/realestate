<script setup>
import { useForm, Link } from "@inertiajs/vue3";
import ErrorMessage from "@/Components/ErrorMessage.vue";

const form = useForm({
    email: null,
    password: null,
});

const login = () => form.post(route("login.store"));
</script>

<template>
    <form @submit.prevent="login">
        <div class="w-1/2 mx-auto">
            <div>
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
                <button class="btn-primary w-full" type="submit">Login</button>

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
