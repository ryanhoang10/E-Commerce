<template>
    <div>
        <button :class="active ? 'text-red' : 'text-green'" @click="toggle">Click Me</button>
        <learnings></learnings>
    </div>
</template>
<script>
import learnings from './learning/AssignmentsComponent.vue';

export default {
    data() {
        return {
            active: false
        }
    },
    methods: {
        toggle() {
            this.active = ! this.active;
        }
    },
    components: {
        learnings
    }
}
</script>
<style scoped>
    .text-green {
        color: green;
    }

    .text-red {
        color: red;
    }
</style>