<template>
    <h4 class="mt-3 text-center">Trending Categories</h4>
    <div class="flex justify-evenly my-4 mx-12">
        <trending-item category="Men's T-Shirts" />
        <trending-item category="Men's Hoodies" />
        <trending-item category="Men's Pants" />
        <trending-item category="Men's Shorts" />
        <trending-item category="Men's T-Shoes" />
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