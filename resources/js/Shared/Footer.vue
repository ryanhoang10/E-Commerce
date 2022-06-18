<template>
    <div class="flex justify-between mt-4 bg-zinc-100 pt-2 border-t-2 border-black-100">
        <div>
            <h4>For You</h4>
            <ul class="text-sm mb-2 mt-2">
                <li>Favorites</li>
                <li>Blog</li>
            </ul>
        </div>

        <div>
            <h4>Gues Services</h4>
            <ul class="text-sm mb-2 mt-2">
                <li>Order Status</li>
                <li>Returns & Exchanges</li>
                <li>Contact Us</li>
            </ul>
        </div>

        <div>
            <h4>Company</h4>
            <ul class="text-sm mb-2 mt-2">
                <li>About Us</li>
            </ul>
        </div>

        <div>
            <h4>Sign Up for Email</h4>
            <input class="appearance-none border text-gray-700" type="email address" name="" id="" placeholder="Email Address">
        </div>

        <div>
            <h4>Connect With Me</h4>
            <ul class="text-sm mb-2 mt-2">
                <li>snapchat</li>
            </ul>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Link
    }
}
</script>