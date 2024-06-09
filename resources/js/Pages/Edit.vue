<template>
    <div class="post-edit">
        <h1>Modification du bien : {{ post.title }}</h1>

        <form @submit.prevent="update">
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
                <input
                    type="text"
                    id="title"
                    v-model="form.title"
                    class="text-black mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                />
            </div>

            <div class="mb-4">
                <label for="body" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea
                    id="body"
                    v-model="form.body"
                    rows="5"
                    class="text-black mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                ></textarea>
            </div>

            <div class="flex gap-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Enregistrer
                </button>
                <a href="/posts" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Annuler
                </a>
            </div>
        </form>
    </div>
</template>

<script>
import { router } from '@inertiajs/vue3'

export default {
    props: {
        post: Object,
    },
    data() {
        return {
            form: {
                title: this.post.title,
                body: this.post.body,
            },
        };
    },
    methods: {
        update() {
            router.put(`/posts/${this.post.id}`, this.form);
        }
    },
};

</script>

<style scoped>
.post-edit {
    font-family: Arial, sans-serif;
    padding: 20px;
}

.mb-4 {
    margin-bottom: 1rem;
}
</style>
