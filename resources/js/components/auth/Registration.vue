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
                    <label>Name</label>
                    <Field name="name" type="text" :class="{ 'is-invalid': errors.name }"/>
                    <div>{{ errors.name }}</div>
                </div>

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

                <div class="flex flex-col">
                    <label>Confirm password</label>
                    <Field name="password_confirmation" type="password" :class="{ 'is-invalid': errors.password_confirmation }"/>
                    <div>{{ errors.password_confirmation }}</div>
                </div>

                <div>
                    <button
                        type="submit"
                        class="border-solid border-2 border-blue-500 px-2"
                    >
                        Register
                    </button>
                </div>
            </Form>
            <div>
                <span class="px-1">
                Have account ?
                </span>
                <button @click="$emit('login')" class="text-blue-500">
                    Login
                </button>
            </div>
        </div>
    </div>
</template>
<script setup>
import {Field, Form} from "vee-validate";
import * as Yup from "yup";
import {useAuthStore} from "Store/auth.js";


const schema = Yup.object().shape({
    name: Yup.string().max(100).required('Name is required'),
    email: Yup.string().email().required('Email is required'),
    password: Yup.string().min(8).required('Password is required'),
    password_confirmation: Yup.string().required()
        .oneOf([Yup.ref('password')], 'Passwords do not match'),
});

async function onSubmit(values) {
    const authStore = useAuthStore();

    const formData = new FormData();
    formData.append('name', values.name);
    formData.append('email', values.email);
    formData.append('password', values.password);
    formData.append('password_confirmation', values.password_confirmation)

    await authStore.register(formData).then();
}
</script>
