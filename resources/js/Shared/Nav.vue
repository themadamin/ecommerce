<template>
    <div class="container mx-auto px-4">
        <div class="flex items-center gap-6 p-4">

            <div>
                <Link href="/">
                    <img src="images/asaxiy-logo.svg" alt="asaxiy-logo">
                </Link>
            </div>

            <div>
                <Link
                    href="/categories"
                    as="button"
                    class="flex items-center gap-1 py-1 px-4 rounded-lg bg-blue-600"
                >
                    <img src="images/burger.svg" alt="burger">
                    <span class="text-white">Categories</span>
                </Link>
            </div>

            <div class="border-solid border-2 border-blue-600 rounded-md flex items-center max-w-[400px] w-full">
                <input class="px-1 grow outline-hidden" type="text" placeholder="Type here...">
                <Link
                    href="/search"
                    as="button"
                    class="bg-blue-600 px-2 py-1 text-white"
                >
                    Search
                </Link>
            </div>

            <div class="flex justify-around grow">
                <div class="flex flex-col items-center px-2">
                    <Link
                        href="/compare"
                        class="flex flex-col items-center px-2"
                    >
                        <img src="images/compare.svg" alt="compare">
                        <span>Compare</span>
                    </Link>
                </div>

                <div class="flex flex-col items-center px-2">
                    <Link
                        href="/payment"
                        class="flex flex-col items-center px-2"
                    >
                        <img src="images/payment.svg" alt="payment">
                        <span>Payment</span>
                    </Link>
                </div>

                <div class="flex flex-col items-center px-2">
                    <Link
                        href="/track"
                        class="flex flex-col items-center px-2"
                    >
                        <img src="images/tracker.svg" alt="tracker">
                        <span>Track</span>
                    </Link>
                </div>

                <div>
                    <Link
                        href="/cart"
                        class="flex flex-col items-center px-2"
                    >
                        <img src="images/cart.svg" alt="tracker">
                        <span>Cart</span>
                    </Link>
                </div>

                <div>
                    <Link
                        :href="route('brands.index')"
                        class="flex flex-col items-center px-2"
                    >
                        <img src="images/heart.svg" alt="heart">
                        <span>Brands</span>
                    </Link>
                </div>

                <div>
                    <Link
                        href="/lang"
                        as="button"
                        class="flex flex-col items-center px-2"
                    >
                        <img src="images/language-uz.svg" alt="lang-uz">
                        <span>O'zbek</span>
                    </Link>
                </div>

                <div>
                    <Link
                        href="/login"
                        as="button"
                        class="flex flex-col items-center px-2"
                    >
                        <img src="images/avatar.svg" alt="avatar">
                        <span>Login</span>
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import {inject} from "vue";
const route = inject('route');
</script>
