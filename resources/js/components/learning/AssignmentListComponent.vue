<template>
    <section v-show="assignments.length">
       <div>
            <h2>
                {{ title }}
                <span>({{ assignments.length }})</span>
            </h2>   
            <span v-show="canHide" @click="$emit('toggle')">&times;</span>
       </div>
        

        <!-- v-model:currentTag so that the prop that the child receives isn't named modelValue too arbitrary  -->
        <assignmentTags 
            :initial-tags="assignments.map(a => a.tag)" 
            v-model:currentTag="currentTag"
        />
        <ul>
            <assignment 
                v-for="assignment in filteredAssignment"
                :key="assignment.id"
                :assignment="assignment">
            </assignment>
        </ul>
        <slot></slot>
    </section>
</template>

<script>
import assignment from './AssignmentComponent.vue';
import assignmentTags from './AssignmentTagsComponent.vue';

export default {
    data() {
        return {
            currentTag: 'All',
        }
    },
    props: {
        assignments: Array,
        title: String,
        canHide: {type: Boolean, default: false}
    }, 
    components: {
        assignment,
        assignmentTags,
    },
    computed: {
        filteredAssignment() {
            if (this.currentTag == 'All') {
                return this.assignments;
            }
            return this.assignments.filter(a => a.tag == this.currentTag)
        },
    }
}
</script>

<style>
    .blue-tag {
        color: blue;
        border: 2px solid blue;
    }
</style>