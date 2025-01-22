<template>
    <div class="container mx-auto px-4">
        <div class="flex items-center gap-6 p-4">

            <div>
                <img src="Assets/asaxiy-logo.svg" alt="asaxiy-logo">
            </div>

            <div>
                <button class="flex items-center gap-1 py-1 px-4 rounded-lg bg-blue-600">
                    <img src="Assets/burger.svg" alt="burger">
                    <span class="text-white">Categories</span>
                </button>
            </div>

            <div class="border-solid border-2 border-blue-600 rounded-md flex items-center max-w-[400px] w-full">
                <input class="px-1 grow outline-none" type="text" placeholder="Type here...">
                <button class="bg-blue-600 px-2 py-1 text-white">Search</button>
            </div>

            <div class="flex justify-around grow">
                <div class="flex flex-col items-center px-2">
                    <a href="#" class="flex flex-col items-center px-2">
                        <img src="Assets/compare.svg" alt="compare">
                        <span>Compare</span>
                    </a>
                </div>

                <div class="flex flex-col items-center px-2">
                    <a href="#" class="flex flex-col items-center px-2">
                        <img src="Assets/payment.svg" alt="payment">
                        <span>Payment</span>
                    </a>
                </div>

                <div class="flex flex-col items-center px-2">
                    <a href="#" class="flex flex-col items-center px-2">
                        <img src="Assets/tracker.svg" alt="tracker">
                        <span>Track</span>
                    </a>
                </div>

                <div>
                    <a href="#" class="flex flex-col items-center px-2">
                        <img src="Assets/cart.svg" alt="tracker">
                        <span>Cart</span>
                    </a>
                </div>

                <div>
                    <a href="#" class="flex flex-col items-center px-2">
                        <img src="Assets/heart.svg" alt="heart">
                        <span>Liked</span>
                    </a>
                </div>

                <div>
                    <button class="flex flex-col items-center px-2">
                        <img src="Assets/language-uz.svg" alt="lang-uz">
                        <span>O'zbek</span>
                    </button>
                </div>

                <div>
                    <Auth/>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import Auth from 'Components/auth/Auth';
</script>
