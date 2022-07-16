<template>
    <Header @showModal="showModal"/>
    <user-modal v-show="modal" @hideModal="hideModal" />

    <div class="flex justify-around p-4">
    <!-- Breadcrumbs dummy -->
        <h6>Men's Streetwear</h6>
        <Sort />    
    </div>
    <div class="flex ml-2">
        <div class="flex-auto w-32">
            <Filter 
                :categories=categories_filter 
                :brands=brands_filter 
                :sizes=sizes_filter
                :colors=colors_filter
            />
        </div>
        <div class="flex-auto">
            <div class="grid grid-cols-4 gap-2 px-4">
                <div 
                    v-for="product in products"
                    :key="product.id"
                >
                    <div>
                        <!-- @todo need to fix -->
                        <Link :href="'/products/' + product.id">
                            <img class="" :src="'/images/' + product.image" alt="product.description"> 
                            <a href="">Quick View</a>
                            <h3 class="text-xs">{{ product.title }}</h3>     
                        </Link>
                    </div>
                </div>    
            </div>                
        </div>
    </div>

    <Footer />

</template>

<script>
import Header from '../Shared/Header.vue';
import Sort from '../Shared/Sort.vue';
import Filter from '../Shared/Filter.vue';
import Footer from '../Shared/Footer.vue';
import { Link } from '@inertiajs/inertia-vue3';
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
        Sort,
        Filter,
        Footer,
        Link,
        UserModal
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