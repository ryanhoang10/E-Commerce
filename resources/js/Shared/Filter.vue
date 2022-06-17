<template>
    <div class="w-32">
  
        <filter-list 
            :filterLists=categories 
            filterCat="Category" 
            :showSection="true" 
        />

        <filter-list 
            :filterLists=brands 
            filterCat="Brand" 
            :showSection="true" 
        />

        <filter-list 
            :filterLists=sizes 
            filterCat="Size" 
            :showSection="true"
        />

        <filter-list 
            :filterLists=colors 
            filterCat="Color" 
            :showSection="true" 
        />

    </div>
</template>

<script>
import FilterList from '../Shared/FilterList.vue';

export default {
    props: {
        categories: Array,
        brands: Array,
        colors: Array,
        sizes: Array,
    },
    components: {
        FilterList
    }
}
</script>