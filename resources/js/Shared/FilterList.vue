<template>

    <div class="mb-3 ml-4 border-t-2">
        <div @click="toggle()">
            <button dusk="filter-cat">{{ filterCat }}</button>
        </div>

        <div v-if="show">
            <ul>
                <li 
                    v-for="filterItem in filterLists"
                    :key="filterItem.id"
                    class="text-xs my-2 cursor-pointer hover:text-sky-600	"
                >
                    {{ filterItem.category_name }}
                </li>
            </ul>        
        </div>  
    </div>
</template>

<script>

export default {
    data() {
        return {
            show: this.showSection
        }
    },
    props: {
        filterCat: String,
        filterLists: Array,
        showSection: Boolean,
    },
    methods: {
        toggle() {
            return this.show = !this.show;
        }
    }
}
</script>
