<template>
    <Header />
    
    <div class="flex">
        <div class="flex-auto w-32">
            <Filter :categories=categories />
        </div>
        <div class="flex-auto">
            <div class="flex justify-around p-4">
            <!-- Breadcrumbs dummy -->
                <h6>Men's Streetwear</h6>
                <Sort />    
            </div>
            <div class="grid grid-cols-4 gap-2 px-4">
                <div 
                    v-for="product in products"
                    :key="product.id"
                >
                    <div>
                        <img class="" :src="'/images/' + product.image" alt="product.description"> 
                        <h3 class="text-xs">{{ product.title }}</h3>     
                    </div>
                </div>    
            </div>                
        </div>
    </div>

</template>

<script>
import Header from '../Shared/Header.vue';
import Sort from '../Shared/Sort.vue';
import Filter from '../Shared/Filter.vue';

export default {
    props: {
        products: Array,
        categories: Array,
    },
    components: {
        Header,
        Sort,
        Filter
    }
}
</script>