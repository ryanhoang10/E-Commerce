<template>
    <div>
        <Link href="/"><img class="mx-auto " src="/images/logo/logo2.png" alt="Logo Image"></Link>
        <form action="post" class="w-full max-w-sm">
            <div class="flex items-center mb-6">
                <div class="w-1/3">
                    <input type="text" placeholder="Username">
                </div>

                <div class="w-2/3">
                    <input type="text" placeholder="Email">                    
                </div>

                <div class="w-1/3">
                    <input type="password" placeholder="Password">                    
                </div>

                <div class="w-2/3">
                    <input type="password" placeholder="Retype Password">
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Header from '../Shared/Header.vue';

export default {
    components: {
        Header,
        Link
    }
}
</script>