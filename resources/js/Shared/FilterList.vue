<template>

    <div>
        <div @click="toggle()">
            <button>{{ filterCat }}</button>
        </div>

        <div v-show="show">
            <ul>
                <li 
                    v-for="filterItem in filterLists"
                    :key="filterItem.id"
                    class="text-sm"
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
