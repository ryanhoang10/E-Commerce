<template>
    <div class="w-64">
  
        <FilterList 
            :filterLists=categories 
            filterCat="Category" 
            :showSection="true" 
        />

        <FilterList 
            :filterLists=categories 
            filterCat="Brand" 
            :showSection="true" 
        />

        <FilterList 
            :filterLists=categories 
            filterCat="Size" 
            :showSection="true" 
        />

        <FilterList 
            :filterLists=categories 
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
        categories: Array
    },
    components: {
        FilterList
    }
}
</script>