<template>
    <div class="w-32">
  
        <FilterList 
            :filterLists=categories 
            filterCat="Category" 
            :showSection="true" 
        />

        <FilterList 
            :filterLists=brands 
            filterCat="Brand" 
            :showSection="true" 
        />

        <FilterList 
            :filterLists=sizes 
            filterCat="Size" 
            :showSection="true"
        />

        <FilterList 
            :filterLists=colors 
            filterCat="Color" 
            :showSection="true" 
        />

    </div>
</template>

<script>
import FilterList from '../Shared/FilterList.vue';

export default {
    data() {
    },
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