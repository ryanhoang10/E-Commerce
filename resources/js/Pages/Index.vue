<template>
    <Header />
    <div class="mt-2">
        <img src="/images/summer-home-banner.jpeg" alt="Summer Banner">
    </div>
    
    <ModelExample />

    <Trending />

    <ModelExample />

    <Footer />
</template>

<script>
import Footer from '../Shared/Footer.vue';
import Header from '../Shared/Header.vue';
import Trending from '../Shared/Trending.vue';
import ModelExample from '../Shared/Models.vue';

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
        Footer,
        ModelExample,
    }
}
</script>