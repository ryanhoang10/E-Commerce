<template>
    <nav>
        <div class="flex justify-between">
            <div>
                <Link href="/"><img class="w-3/12" src="/images/logo/logo.png" alt="Logo Image"></Link>
            </div>
            <ul class="inline-flex text-sm pl-4 pt-4">
                <li class="mx-2"><Link href="#">Sign Up</Link></li>
                <li class="mx-2"><Link href="#">Favorite</Link></li>
                <li class="mx-2"><Link href="#">Shopping Cart</Link></li>
            </ul>   
        </div>
    </nav>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
export default {
    components: {
        Link
    }   
}
</script>