<template>
    <Teleport to="#modal">
        <div v-if="show" class="fixed inset-0 flex justify-center items-center">
            <div class="bg-opacity-40 bg-gray-900 absolute inset-0 -z-[1]"
                 @click="close"></div>
            <div class="bg-gray-50 rounded-3xl overflow-x-auto flex flex-col w-1/5 h-2/5">
                <button
                    type="button"
                    class="w-7 p-2 bg-gray-300 rounded-full"
                    @click="close">

                    <img src="Assets/x-mark.svg" alt="close button"/>
                </button>
                <slot/>

            </div>
        </div>
    </Teleport>
</template>
<script setup>
const emit = defineEmits(['close'])

defineProps({
    show: Boolean,
})

const close = () => {
    emit("close");
}
</script>

<!--
<header class="px-4 py-6 flex justify-between items-center">
<h2 class="text-lg font-bold">{{title}}</h2>
<button
    type="button"
    class="w-7 p-2 bg-gray-300 rounded-full"
    @click="close">

    <img src="Assets/x-mark.svg" alt="close button"/>
</button>
</header>
-->
