<template>
    <div class="z-10 fixed w-full h-modal bg-gray-50 overflow-y-auto">
        <span @click="$emit('hideModal', !hideModal)">x</span>
        <div class="flex justify-between pt-4">
            <form action="post" @submit.prevent="login" class="rounded-sm w-full max-w-sm mx-auto bg-zinc-200 px-4 pb-4 pt-6">
                <div class="">
                    <div class="mb-6">
                        <input type="text" placeholder="Username" class="rounded-none rounded-lg bg-gray-50 border border-gray-300 text-gray-900 block w-full p-1.5">
                    </div>

                    <div class="mb-6">
                        <input type="password" placeholder="Password" class="rounded-none rounded-lg bg-gray-50 border border-gray-300 block w-full p-1.5">                    
                    </div>
                </div>
                
                <div class="pt-3 flex justify-end">
                    <button class="mr-3">Sign In</button>
                </div>
            </form>

            <form action="post" @submit.prevent="register" class="rounded-sm w-full max-w-sm mx-auto bg-zinc-200 px-4 pb-4 pt-6">
                <div class="">
                    <div class="mb-6">
                        <input type="text" v-model="registerForm.username" placeholder="Username" class="rounded-none rounded-lg bg-gray-50 border border-gray-300 text-gray-900 block w-full p-1.5">
                    </div>

                    <div class="mb-6">
                        <input type="text" v-model="registerForm.email" placeholder="Email" class="rounded-none rounded-lg bg-gray-50 border border-gray-300 text-gray-900 block w-full p-1.5">                    
                    </div>

                    <div class="mb-6">
                        <input type="password" v-model="registerForm.password" placeholder="Password" class="rounded-none rounded-lg bg-gray-50 border border-gray-300 block w-full p-1.5">                    
                    </div>

                    <div class="mb-6">
                        <input type="password" v-model="registerForm.confirmPassword" placeholder="Retype Password" class="rounded-none rounded-lg bg-gray-50 border border-gray-300 block w-full p-1.5">
                    </div>

                    <!-- <div class="mb-6">
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
                    </div> -->
                </div>

                <div class="pt-3 flex justify-end">
                    <button class="mr-3">Sign Up</button>
                </div>
                
            </form>
        </div>
    </div>
</template>

<script>
import { Inertia } from '@inertiajs/inertia'
// import { Link } from '@inertiajs/inertia-vue3';
// import Header from '../Shared/Header.vue';
// import Nav from '../Shared/Nav.vue';

export default {
    data() {
        return {
            hideModal: false,
            registerForm: {
                username: null,
                password: null,
                confirmPassword: null,
                email: null,
            },
            loginForm: {
                username:null,
                password: null,   
            }
        }
    },
    methods: {
        register() {
            // console.log(this.registerForm, ' <-- L data')
            if (this.registerForm.password != this.registerForm.confirmPassword) {
                // create error component
                alert('Passwords do not match')
                return
            }

            Inertia.post('/signup', this.registerForm)

            console.log('after')
        }
    }
    // components: {
    //     Header,
    //     Link,
    //     Nav
    // }
}
</script>