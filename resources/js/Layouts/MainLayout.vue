<template>
    <div class="min-h-screen flex flex-col items-center pt-6 bg-gray-100">
        <div>
            <Link href="/">
                <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
            </Link>
        </div>
        <div  class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="text-sm text-gray-700 dark:text-gray-500 underline"
            >
                Dashboard
            </Link>

            <template v-else>
                <Link :href="route('post.index')" class="text-sm text-gray-700 dark:text-gray-500 underline">Posts</Link>
                <Link :href="route('login')" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Log in</Link>
                <Link :href="route('register')" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</Link>
            </template>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

export default {
    name: "MainLayout",
    components: {
        Link,
        ApplicationLogo
    }

}
</script>

<style scoped>

</style>
