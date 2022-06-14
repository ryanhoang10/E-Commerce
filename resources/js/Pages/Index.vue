<template>
    <Header />

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

export default {
    props: {
        products: Array
    },
    components: {
        Header
    }
}
</script>