<template>
    <section id="post-list">
        <h4>My post list</h4>
        <PostCard v-for="post in posts" :key="post.id" :post="post"/>
    </section>
</template>

<script>
import PostCard from "./PostCard.vue";

export default {
    nmae: "PostList",
    data(){
        return {
            posts: []
        };
    },
    components:{
        PostCard,
    },
    methods: {
        getPosts(){
            axios
            .get('http://localhost:8000/api/posts')
            .then(res => { this.posts = res.data })
            .catch(error => {console.error(error)});
        }
    },
    created(){
        this.getPosts();
    }
}
</script>

<style>

</style>