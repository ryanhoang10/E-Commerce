<template>
    <div>
        <Link href="/"><img class="mx-auto " src="/images/logo/logo2.png" alt="Logo Image"></Link>
        <form action="post" class="rounded-sm w-full max-w-sm mx-auto bg-zinc-200 px-4 pb-4 pt-6">
            <div class="">
                <div class="mb-6">
                    <input type="text" placeholder="Username" class="rounded-none rounded-lg bg-gray-50 border border-gray-300 text-gray-900 block w-full p-1.5">
                </div>

                <div class="mb-6">
                    <input type="text" placeholder="Email" class="rounded-none rounded-lg bg-gray-50 border border-gray-300 text-gray-900 block w-full p-1.5">                    
                </div>

                <div class="mb-6">
                    <input type="password" placeholder="Password" class="rounded-none rounded-lg bg-gray-50 border border-gray-300 block w-full p-1.5">                    
                </div>

                <div class="mb-6">
                    <input type="password" placeholder="Retype Password" class="rounded-none rounded-lg bg-gray-50 border border-gray-300 block w-full p-1.5">
                </div>

                <div class="mb-6">
                    <input type="text" placeholder="Address 1" class="rounded-none rounded-lg bg-gray-50 border border-gray-300 text-gray-900 block w-full p-1.5">
                </div>

                <div class="mb-6">
                    <input type="text" placeholder="Address 2" class="rounded-none rounded-lg bg-gray-50 border border-gray-300 text-gray-900 block w-full p-1.5">                    
                </div>

                <div class="mb-6">
                    <input type="text" placeholder="City" class="rounded-none rounded-lg bg-gray-50 border border-gray-300 text-gray-900 block w-full p-1.5">
                </div>

                <div class="mb-6">
                    <input type="text" placeholder="State" class="rounded-none rounded-lg bg-gray-50 border border-gray-300 text-gray-900 block w-full p-1.5">                    
                </div>

                <div class="mb-6">
                    <input type="text" placeholder="Zipcode" class="rounded-none rounded-lg bg-gray-50 border border-gray-300 text-gray-900 block w-full p-1.5">
                </div>

                <!-- <div class="mb-6">
                    <input type="text" placeholder="Address 2" class="rounded-none rounded-lg bg-gray-50 border border-gray-300 text-gray-900 block w-full p-1.5">                    
                </div> -->
            </div>

            <div class="pt-3 flex justify-end">
                <button class="mr-3">Sign In</button>
                <button class="mr-3">Next</button>   
            </div>
            
        </form>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Header from '../Shared/Header.vue';
import Nav from '../Shared/Nav.vue';

export default {
    components: {
        Header,
        Link,
        Nav
    }
}
</script>