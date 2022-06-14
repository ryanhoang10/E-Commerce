<template>
    <div class="flex justify-between">
        <nav>
            <div class="flex">
                <div>
                    <img class="w-3/12" src="/images/logo/logo.png" alt="Logo Image">
                </div>
                <ul class="inline-flex	">
                    <li class=""><Link href="#">Sign Up</Link></li>
                    <li><Link href="#">Favorite</Link></li>
                    <li><Link href="#">Shopping Cart</Link></li>
                </ul>   
            </div>
        </nav>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
export default {
    components: {
        Link
    }   
}
</script>