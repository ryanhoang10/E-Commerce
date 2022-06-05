<template>
    <div 
        v-for="product in products"
        :key="product.id"
    >
        <h3 class="text-red-400 bg-green-800">{{ product.title }}</h3>  
        <img :src="'/images/' + product.image" alt="product.description"> 
    </div>
</template>

<script>
export default {
    props: {
        products: Array
    }
}
</script>