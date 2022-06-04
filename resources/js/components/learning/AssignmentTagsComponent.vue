<template>
    <div>
        <!-- $emit allows for communication from child to parent -->
        <button 
            @click="$emit('Update:currentTag', tag)"
            v-for="tag in tags"
            :class="{
                'blue-tag': tag == currentTag
            }"
            >{{ tag }}
        </button>
    </div>
</template>

<script>
export default {
    props: {
        initialTags: Array,
        currentTag: String
    },
    computed: {
        tags() {
            return ['All', ...new Set(this.initialTags)];
        },
    }
}
</script>