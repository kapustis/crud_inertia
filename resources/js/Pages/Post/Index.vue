<template>

    <MainLayout>
        <h1 class="text-lg mb-8">Index posts</h1>
        <div>
            <Link
                :href="route('post.create')"
                class="hover:bg-white hover:text-sky-500 block p-2 w-32 border border-sky-500 bg-sky-500 rounded-full text-center text-white"
            >
                Add
            </Link>

            <div v-if="posts">
                <div class="mt-8 pt-8 border-t border-gray-300" v-for="post in posts">
                    <div>id : {{ post.id }}</div>
                    <div>title : {{ post.title }}</div>
                    <div>body : {{ post.body }}</div>
                    <div class="text-sm text-right">{{ post.date }}</div>
                    <div class="text-sm text-right">
                        <Link
                            class="text-sky-500"
                            :href="route('post.show',post.id)"
                        >
                            Show
                        </Link>
                    </div>
                    <div class="text-sm text-right">
                        <Link
                            class="text-sky-500"
                            :href="route('post.edit',post.id)"
                        >
                            Edit
                        </Link>
                    </div>
                    <div class="text-sm text-right">
                        <p
                            class="cursor-pointer text-red-500"
                            @click="destroyPost(post.id)"
                        >
                            Delete
                        </p>
                    </div>
                </div>
            </div>
            <div v-else>
                <p>no posts</p>
            </div>
        </div>
    </MainLayout>

</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    name: "index",
    props: [
        'posts'
    ],
    components: {
        Link,
        MainLayout
    },
    methods:{
        destroyPost(id){
            this.$inertia.delete(`/posts/${id}`)
        }
    }
}
</script>

<style scoped>

</style>
