<template>
    <nav class="mb-2">
        <ul class="flex justify-around text-sm border-t-2 pt-4">
            <li class="border-b-2 border-transparent hover:border-b-2 hover:border-sky-500"><Link href="/products">Mens</Link></li>
            <li class="hover:border-b-2 hover:border-sky-500"><Link href="#">Shoes</Link></li>
            <li class="hover:border-b-2 hover:border-sky-500"><Link href="#">Backpacks</Link></li>
            <li class="hover:border-b-2 hover:border-sky-500"><Link href="#">Brands</Link></li>
            <li class="hover:border-b-2 hover:border-sky-500"><Link href="#">Pokemon</Link></li>
            <li class="hover:border-b-2 hover:border-sky-500"><Link href="#">Yu-Gi-Oh</Link></li>
            <li class="hover:border-b-2 hover:border-sky-500"><Link href="#">Skates</Link></li>
            <li class="hover:border-b-2 hover:border-sky-500"><Link href="#">Sale</Link></li>
        </ul>
    </nav>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
    components: {
        Link
    }
}
</script>