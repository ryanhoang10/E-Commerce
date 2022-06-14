<template>
    <Header />

    <div class="flex justify-around">
        <!-- Breadcrumbs dummy -->
        <h6>Men's Streetwear</h6>
        <Sort />    
    </div>
    
    <div>
        <div class="grid grid-cols-4 gap-2">
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

</template>

<script>
import Header from '../Shared/Header.vue';
import Sort from '../Shared/Sort.vue';

export default {
    props: {
        products: Array
    },
    components: {
        Header,
        Sort
    }
}
</script>