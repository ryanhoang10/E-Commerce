<template>
    <div class="cursor-pointer hover:text-green-400 pr-2">
       <Link :href="'/products?cat=' + cat">
            <img class="rounded-full border-2 border-sky-400 hover:border-green-500" src="/images/trending/mens_pants.png" alt="">
            <span class="text-sm">{{ category }}</span>
        </Link>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
export default {
    components: {
        Link
    },
    props: {
        category: String,
        cat: String,
    }
}
</script>