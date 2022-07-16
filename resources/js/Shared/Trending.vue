<template>
    <h4 class="mt-3 text-center">Trending Categories</h4>
    <div class="flex justify-evenly my-4 mx-12">
        <trending-item category="Men's T-Shirts" cat="T-Shirt"/>
        <trending-item category="Men's Hoodies" cat="Hoodie" />
        <trending-item category="Men's Pants" cat="Pant" />
        <trending-item category="Men's Shorts" cat="Short" />
        <trending-item category="Men's T-Shoes" cat="Shoe" />
    </div>
</template>

<script>
import TrendingItem from '../Shared/TrendingItem.vue';

export default {
  components: { TrendingItem },
    compoments: {
        TrendingItem,
    }    
}
</script>