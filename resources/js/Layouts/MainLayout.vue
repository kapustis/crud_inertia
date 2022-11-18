<template>
    <div class="relative flex items-top justify-center min-h-screen sm:items-center sm:pt-0">
        <div  class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <template>
                <Link :href="route('post.index')" class="text-sm text-gray-700 dark:text-gray-500 underline">
                    Posts
                </Link>
                <Link :href="route('login')" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
                    Log in
                </Link>
<!--                <Link v-if="canRegister" :href="route('register')"-->
<!--                      class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register-->
<!--                </Link>-->
            </template>
        </div>
        <div class="w-96 mx-auto pt-8">
            <slot/>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

// defineProps({
//     canLogin: Boolean,
//     canRegister: Boolean,
//     laravelVersion: String,
//     phpVersion: String,
// })
export default {
    name: "MainLayout",
    components: {
        Link
    }

}
</script>

<style scoped>

</style>
