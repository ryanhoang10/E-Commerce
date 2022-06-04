<template>
    <li>
        <label>
            {{ assignment.name }}

            <input type="checkbox" v-model="assignment.complete">
        </label>
    </li>
</template>

<script>
export default {
    props: {
        assignment: Object
    }
}
</script>