<template>
    <Header />
    <div class="mt-2">
        <img src="/images/summer-home-banner.jpeg" alt="Summer Banner">
    </div>
    <div>
        <Trending />
    </div>
</template>

<script>
import Header from '../Shared/Header.vue';
import Trending from '../Shared/Trending.vue';

export default {
    props: {
        products: Array,
        categories_filter: Array,
        brands_filter: Array,
        colors_filter: Array,
        sizes_filter: Array
    },
    components: {
        Header,
        Trending,
    }
}
</script>