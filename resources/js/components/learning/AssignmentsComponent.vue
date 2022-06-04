<template>
    <div>
        <assignement-list :assignments="inprogressAssignments" title="In Progress"> Testing my first slot </assignement-list>
        <assignement-list 
            v-if="showCompleted"
            :assignments="completedAssignments" 
            title="Completed" 
            can-hide
            @toggle='showCompleted = !showCompleted'    
        ></assignement-list>
    </div>
</template>

<script>
import assignementList from './AssignmentListComponent.vue';

export default {
    components: {
        assignementList
    },
    data() {
        return {
            assignments: [
                {name: 'Finish project', complete: false, id: 1, tag: 'Math'},
                {name: 'Read Chapter 4', complete: false, id: 2, tag: 'Science'},
                {name: 'Turn in homework', complete: false, id: 3, tag: 'Math'}
            ],
            showCompleted: true
        }
    }, 
    computed: {
        inprogressAssignments() {
            return this.assignments.filter(a => ! a.complete)
        },

        completedAssignments() {
            return this.assignments.filter(a => a.complete)
        }
    }
}
</script>

<style scoped>

</style>