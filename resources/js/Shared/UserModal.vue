<template>
<!-- @todo create two new components for register and login -->
    <div class="z-10 fixed w-full h-modal bg-gray-50 overflow-y-auto">
        <span @click="$emit('hideModal', !hideModal)" class="ml-2 cursor-pointer">x</span>
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
                        <input type="text" v-model="registerForm.firstName" placeholder="First Name" class="rounded-none rounded-lg bg-gray-50 border border-gray-300 text-gray-900 block w-full p-1.5">
                    </div>

                    <div class="mb-6">
                        <input type="text" v-model="registerForm.lastName" placeholder="Last Name" class="rounded-none rounded-lg bg-gray-50 border border-gray-300 text-gray-900 block w-full p-1.5">
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
                firstName: null,
                lastName: null,
                name: null,
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

            // probably can clean this
            this.registerForm.name = this.registerForm.firstName + ' ' + this.registerForm.lastName;

            Inertia.post('/signup', this.registerForm)
        }
    }
    // components: {
    //     Header,
    //     Link,
    //     Nav
    // }
}
</script>