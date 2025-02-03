<template>
    <section class="container mx-auto px-4 py-4 flex flex-col">
        <div class="">
            <div class="table w-full max-w-4xl">
                <div class="table-header-group">
                    <div class="table-row font-bold">
                        <div class="table-cell text-bold">Id</div>
                        <div class="table-cell text-bold">Name</div>
                        <div class="table-cell text-bold">Slug</div>
                    </div>
                </div>
                <div class="table-row-group">
                    <div class="table-row" v-for="brand in brands.data" :key="brand.id">
                        <div class="table-cell">{{brand.id}}</div>
                        <div class="table-cell">{{brand.name}}</div>
                        <div class="table-cell">{{ brand.slug }}</div>
                    </div>
                </div>
            </div>
            <Pagination :links="brands.meta.links" class="mt-5"/>
        </div>
    </section>
</template>
<script setup>
import Pagination from "Shared/Pagination.vue";

defineProps({
    brands: {
        data: Array,
        links: Object,
        meta: {
            links: Array
        }
    }
});

</script>
