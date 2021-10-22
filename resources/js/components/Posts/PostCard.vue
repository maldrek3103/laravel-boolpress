<template>
  
      <div class="card my-5">
            <div class="card-header">
                <h5><strong>{{post.title}}</strong></h5>
            </div>
        <div class="card-body">
            <p class="card-text">{{post.content}}</p>
            </div>
            <div class="card-footer text-secondary d-flex">
                <time>Published on: {{formatDate(post.created_at)}}</time>
        </div>
    </div>
  
</template>

<script>
export default {
    name: "PostCard",
    props: ["post"],
    methods: {
        formatDate(date) {
            const postDate = new Date(date);
            const day = postDate.getDate();
            const month = postDate.getMonth() + 1;
            const year = postDate.getFullYear();
            const hours = postDate.getHours();
            const minutes = postDate.getMinutes();
            return `${day}/${month}/${year} - ${hours}:${minutes}`;
        }
    }
};
</script>

<style>

</style>