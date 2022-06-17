<template>
    <div class="cursor-pointer hover:text-green-400 pr-2">
        <img class="rounded-full border-2 border-sky-400 hover:border-green-500" src="/images/trending/mens_pants.png" alt="">
        <span class="text-sm">{{ category }}</span>
    </div>
</template>

<script>
export default {
    props: {
        category: String
    }
}
</script>