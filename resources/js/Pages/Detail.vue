<template>
    <div class="post-list">
        <h1 class="text-xl"> Bien immobilier: {{ post.title }}</h1>
        <h2> Catégorie : {{ categories[post.category_id-1].name }}</h2>

            <img src="https://www.picsum.photos/500/300?random=1" />

        <p>{{ post.body }}</p>
        <div class="flex gap-4">
        <a :href="`/posts`">Retour à la liste</a>
        <a :href="`/posts/${post.id}/edit`">Modifier le bien</a>

            <button @click="deletePost" class="text-red-500 hover:text-red-700">Supprimer le bien</button>
        </div>
    </div>
</template>

<script>
import { router } from '@inertiajs/vue3';
export default {
    props: {
        post: Object,
        categories: Array,
    },
    methods: {
        deletePost() {
            if (confirm('Are you sure you want to delete this post?')) {
                router.delete(`/posts/${this.post.id}/delete`).then(() => {
                    // Optionally, handle the response or redirect
                }).catch((error) => {
                    console.error('Error deleting post:', error);
                });
            }
        },
    },
};
</script>

<style scoped>
.post-list {
    font-family: Arial, sans-serif;
    padding: 20px;
}

a {
    color: #3490dc;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

.carousel-item img {
    width: 100%;
    height: auto;
}

</style>
