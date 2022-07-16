<template>
    <Header @showModal="showModal" />
    <div class="mt-2">
        <img src="/images/summer-home-banner.jpeg" alt="Summer Banner">
    </div>

    <user-modal v-show="modal" @hideModal="hideModal"/>
    
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
import UserModal from '../Shared/UserModal.vue';

export default {
    data() {
        return {
            modal: false,
        }
    },
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
        UserModal,
    },
    methods: {
        showModal(event) {
            return this.modal = event;
        },
        hideModal(event) {
            return this.modal = !event;
        }
    }
}
</script>