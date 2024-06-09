<template>
    <div class="post-list">
        <h1> Bien immobilier: {{ post.title }}</h1>


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

.posts {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.post {
    color: #333;
    background: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
}

a {
    color: #3490dc;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}


.carousel-item {
    transition: opacity 0.5s ease-in-out;
}

.carousel-item.active {
    opacity: 1;
}

.carousel-item img {
    width: 100%;
    height: auto;
}

.carousel-control {
    transition: opacity 0.5s ease-in-out;
}

.carousel-control.active {
    opacity: 1;
}
</style>
