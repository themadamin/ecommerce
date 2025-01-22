<template>
    <Form class="flex flex-col" @submit="handleSubmit">
        <div v-for="{as, name, label, ...attrs} in schema.fields" :key="name" class="p-2">
            <label :for="name">{{label}}</label>
            <Field :as="as"
                   :id="name" :name="name"
                   v-bind="attrs" >
                <slot name="selection"/>
            </Field>
            <ErrorMessage :name="name" class="text-rose-500"/>
        </div>
        <div class="mt-2 d-flex justify-content-between">
<!--            <slot name="delete"/>-->
            <button class="">{{submitText}}</button>
        </div>
    </Form>
</template>
<script setup>
import {Form, Field, ErrorMessage} from "vee-validate";

const onSubmit = defineEmits(['onSubmit'])

defineProps({
    schema: {
        type: Object,
        required: true
    },
    submitText: {
        type: String,
        default: 'Submit'
    }
});

function handleSubmit(values){
    onSubmit('onSubmit', values);
}

</script>
