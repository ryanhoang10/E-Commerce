<template>
    <div class="w-64">
        <div @click="toggle()">
            <button>Category</button>
        </div>

        <div v-show="showCategory">
            <ul>
                <li 
                    v-for="category in categories"
                    :key="category.id"
                    class="text-sm"
                >
                    {{ category.category_name }}
                </li>
            </ul>        
        </div>

        <div>
            <button>Brand</button>
        </div>

        <div>
            <ul>
                <li>Fake Brand</li>
            </ul>
        </div>

        <div>
            <button>Size</button>
        </div>

        <div>
            <ul>
                <li>Size</li>
            </ul>
        </div>

        <div>
            <button>Color</button>
        </div>

        <div>
            <ul>
                <li>Color</li>
            </ul>
        </div>

    </div>
</template>

<script>
export default {
    data() {
        return {
            showCategory: true,
            showSize: true,
            showBrand: true,
        }
    },
    props: {
        categories: Array
    },
    methods: {
        toggle() {
            return this.showCategory = !this.showCategory;
        }
    }
}
</script>