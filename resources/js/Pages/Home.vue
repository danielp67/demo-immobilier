<template>
    <div class="post-list">
        <h1>Bienvenue sur notre Blog Immobilier!</h1>
        <a :href="`/posts`">Trouver votre bien-aimé !</a>


        <div class="flex gap-4">
            <img src="https://www.picsum.photos/250/300?random=1" />
            <img src="https://www.picsum.photos/250/300?random=2" />
            <img src="https://www.picsum.photos/250/300?random=3" />

        </div>

        <div class="flex gap-4">
            <a :href="`/posts`">Liste des biens</a>
            <a href="/contact">Nous contacter</a>
        </div>

    </div>
</template>

<script setup>
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
</style>
