<template>
    <div class="post-list">
        <h1> Bien immobilier: {{ post.title }}</h1>


            <img src="https://www.picsum.photos/500/300?random=1" />

        <p>{{ post.body }}</p>
        <div class="flex gap-4">
        <a :href="`/posts`">Retour à la liste</a>
        <a :href="`/posts/${post.id}/edit`">Modifier le bien</a>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        post: Object,
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
