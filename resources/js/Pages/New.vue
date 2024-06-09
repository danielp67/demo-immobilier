<template>
    <div class="post-edit">
        <h1>Ajout d'un nouveau bien</h1>

        <form @submit.prevent="create">
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
                <input
                    type="text"
                    id="title"
                    v-model="form.title"
                    class="text-black mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    required
                />
            </div>

            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700">Catégorie</label>
                <select
                    id="category"
                    v-model="form.category_id"
                    class="text-black mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    required
                >
                    <option
                        v-for="category in categories"
                        :key="category.id"
                        :value="category.id"
                    >
                        {{ category.name }}
                    </option>
                </select>
            </div>
            <div class="mb-4">
                <label for="body" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea
                    id="body"
                    v-model="form.body"
                    rows="5"
                    class="text-black mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    required
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
      //  post: Object,
        categories: Array,

    },
    data() {
        return {
            form: {
                title: '',
                body: '',
                category_id: 1,
            },
        };
    },
    methods: {
        create() {
            router.post(`/posts`, this.form);
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
