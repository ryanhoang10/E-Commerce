<template>
    <Header />
    <!-- <Nav /> -->

</template>

<script>
import Header from '../Shared/Header.vue';
// import Nav from '../Shared/Nav.vue';

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
    }
}
</script>