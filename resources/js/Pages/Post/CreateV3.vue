<template>

    <div class="w-96 mx-auto pt-2">
        <h1 class="text-lg mb-8"> Create post</h1>
        <div class="mb-8">
            <Link :href="route('post.index')" class="text-sky-500 text-sm mb-8"> Back</Link>
        </div>
        <form @submit.prevent="submit">
            <div class="mb-2">
                <input
                    class="w-full rounded-full border-gray-200 mb-2"
                    id="text"
                    type="text"
                    name="title"
                    placeholder="title"
                    v-model="form.title"
                >
            </div>
            <div class="mb-2">
                <textarea
                    class="w-full rounded-full border-gray-200 mb-2"
                    id="body"
                    type="text"
                    name="body"
                    placeholder="body"
                    v-model="form.body"
                ></textarea>
            </div>
            <div>
                <button
                    type="submit"
                    class="block ml-auto hover:bg-white hover:text-green-500 p-2 w-32 border border-green-500 bg-green-500 rounded-full text-center text-white"
                >
                    Store
                </button>
            </div>
        </form>
    </div>

</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import {reactive} from 'vue'
import {Inertia} from '@inertiajs/inertia'

export default {
    setup() {
        const form = reactive({
            title: null,
            body: null,
        })

        function submit() {
            Inertia.post('/posts', form)
        }

        return {form, submit}
    },
    components: {
        Link
    },
}


</script>

<style scoped>

</style>
