<template>
    <nav>
        <div class="flex justify-between">
            <Link href="/"><img class="pt-1 w-1/2" src="/images/logo/logo2.png" alt="Logo Image"></Link>

            <search-bar />
            <ul class="inline-flex text-sm pl-4 pt-4">
                <li class="mx-2 cursor-pointer" @click="$emit('showModal', !showModal)">Sign Up</li>
                <li class="mx-2"><Link href="#">Favorite</Link></li>
                <li class="mx-2"><Link href="#">Shopping Cart</Link></li>
            </ul>   
        </div>
        
        <!-- <user-modal v-if="showModal" /> -->

    </nav>
    <Nav />
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Nav from './Nav.vue';
import SearchBar from './SearchBar.vue';
import UserModal from '../Shared/UserModal.vue';


export default {
    data() {
        return {
            showModal: false,
        }
    },
    components: {
        Link,
        Nav,
        SearchBar,
        UserModal,
    },
    // methods: {
    //     showModal() {
    //         this.$emit('open-modal')
    //     }
    // }   
}
</script>