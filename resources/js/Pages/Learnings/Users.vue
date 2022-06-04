<template>
    <h1>Welcome {{ name }}</h1>
    <p>Using these frameworks</p>
    <Nav></Nav>
</template>

<script>
import Nav from '../../Shared/Learnings/Nav.vue'

export default {
    components: {
        Nav,
    },
    props: {
        name: String,
        frameworks: Array
    },
}
</script>