<template>
    <div>
        <header class="flex justify-between px-4 py-6">
            <h2>Login here</h2>
        </header>
        <div class="flex flex-col items-center">
            <Form @submit="onSubmit"
                  :validation-schema="schema"
                  v-slot="{errors}"
            >

                <div class="flex flex-col">
                    <label>Email</label>
                    <Field name="email" type="email" :class="{ 'is-invalid': errors.email }"/>
                    <div>{{ errors.email }}</div>
                </div>

                <div class="flex flex-col">
                    <label>Password</label>
                    <Field name="password" type="password" :class="{ 'is-invalid': errors.password }"/>
                    <div>{{ errors.password }}</div>
                </div>

                <div>
                    <button
                        type="submit"
                        class="border-solid border-2 border-blue-500 px-2"
                    >
                        Login
                    </button>
                </div>
            </Form>
            <div>
                    <span class="px-1">
                    You dont have an account ?
                    </span>
                <button @click="$emit('register')" class="text-blue-500">
                    Register
                </button>
            </div>
        </div>
    </div>
</template>
<script setup>
import {Form, Field} from 'vee-validate';
import {useAuthStore} from "Store/auth";
import {useRouter} from "vue-router";
import * as Yup from 'yup';

const router = useRouter()

const schema = Yup.object().shape({
    email: Yup.string().email().required('Email is required'),
    password: Yup.string().min(8).required('Password is required')
});

async function onSubmit(values) {
    const authStore = useAuthStore();

    const formData = new FormData();
    formData.append('email', values.email);
    formData.append('password', values.password);

    await authStore.login(formData);
    return router.go(-1);
}

</script>

