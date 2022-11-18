<template>

        <h1 class="text-lg mb-2">Show post</h1>
        <div class="mb-8">
            <Link :href="route('post.index')" class="text-sky-500 text-sm mb-8"> Back</Link>
        </div>
        <div>
            <div v-if="post">
                <div class="mt-8 pt-8 border-t border-gray-300">
                    <div>id : {{ post.id }}</div>
                    <div>title : {{ post.title }}</div>
                    <div>body : {{ post.body }}</div>
                    <div class="text-sm text-right">{{ post.date }}</div>
                </div>
            </div>
            <div v-else>
                <p>no post</p>
            </div>
        </div>

</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    name: "Show",
    layout: MainLayout,
    props: [
        'post'
    ],
    components: {
        Link
    }
}
</script>

<style scoped>

</style>
