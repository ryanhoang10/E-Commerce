<template>
    <nav>
        <ul>
            <li><Link href="/test">Home</Link></li>
            <li><Link href="/test/settings">Settings</Link></li>
            <li><Link href="/test/users">Users</Link></li>
            <li><Link href="/test/logout" method="post" as="button">Logout</Link></li>
        </ul>
    </nav>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
    components: {
        Link
    }
}
</script>