<template>
    <button class="flex flex-col items-center px-2" @click="toggleLogin">
        <img src="Assets/avatar.svg" alt="avatar">
        <span>Login</span>
    </button>
    <Modal :show="showModal" @close="showModal = false">
        <Login v-if="showLogin" @register="toggleRegistration"/>
        <Registration v-if="showRegistration" @login="toggleLogin"/>
    </Modal>
</template>

<script setup>
import {ref} from "vue";
import Login from 'Components/auth/Login';
import Registration from 'Components/auth/Registration';
import Modal from 'Components/layout/Modal';

const showModal = ref(false);
const showLogin = ref(false);
const showRegistration = ref(false);

async function toggleLogin(){
    showModal.value = true;
    showRegistration.value = false;
    showLogin.value = true;
}

async function toggleRegistration(){
    showModal.value = true;
    showLogin.value = false;
    showRegistration.value = true;
}
</script>

