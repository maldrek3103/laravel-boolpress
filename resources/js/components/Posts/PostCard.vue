<template>
  
      <div class="card my-5">
            <div class="card-header">
                {{post.title}}
            </div>
        <div class="card-body">
            <p class="card-text">{{post.content}}</p>
            <footer class="text-secondary d-flex justify-content-between">
                <time> {{post.created_at}}</time>
                <a href="#" class="btn btn-primary">Read</a>
            </footer>
        </div>
    </div>
  
</template>

<script>
export default {
    name: "PostCard",
    props: ["post"],
};
</script>

<style>

</style>