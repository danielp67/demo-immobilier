
<template>
  <div class="post-list">
    <h1>Liste des biens : {{ posts.length }}</h1>
      <div class="flex gap-4">
          <a href="/">Accueil</a>
          <a href="/posts/new">Ajouter un bien</a>
      </div>
    <div v-if="posts.length" class="posts">
      <div v-for="post in posts" :key="post.id" class="post">
        <h2>{{ post.title }}</h2>
        <a :href="`/posts/${post.id}`">Voir plus ...</a>
      </div>
    </div>
    <div v-else>
      <p>Pas de bien disponible.</p>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    posts: Array,
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
</style>
