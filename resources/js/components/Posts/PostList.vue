<template>
    <section id="post-list">
        <h4>My post list</h4>
        <PostCard v-for="post in posts" :key="post.id" :post="post"/>
        <nav aria-label="Page navigation example">
    <ul class="pagination">

        <li class="page-item" v-if="pagination.currentPage > 1" @click="getPosts(pagination.currentPage - 1)">
            <a class="page-link" href="#">Previous</a>
        </li>

        <li class="page-item" :class="{active: pagination.currentPage === n}" v-for="n in pagination.lastPage" :key="n" @click="getPosts(n)">
            <a class="page-link" href="#">{{n}}</a>
        </li>

        <li class="page-item" v-if="pagination.lastPage > pagination.currentPage" @click="getPosts(pagination.currentPage + 1)">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>
    </section>
</template>

<script>
import PostCard from "./PostCard.vue";

export default {
    nmae: "PostList",
    data(){
        return {
            posts: [],
            pagination: {}
        };
    },
    components:{
        PostCard,
    },
    methods: {
        getPosts(page){
            axios
            .get(`http://localhost:8000/api/posts?page=${page}`)
            .then(res => { 
                const {data, current_page, last_page} = res.data;
                this.posts = data;
                this.pagination = {currentPage: current_page, lastPage: last_page};
            })
            .catch(error => {console.error(error)});
        }
    },
    created(){
        this.getPosts();
    }
}
</script>

<style>
.page-item {
    cursor: pointer;
}
</style>