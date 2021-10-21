<template>
    <div class="container my-5">
        <Header :title="title"/>
        <main>
            <PostList />
        </main>        
    </div>
</template>

<script>
import Header from "./Header.vue";
import PostList from "./Posts/PostList.vue";
export default {
    name: "App",
    data(){
        return { 
            title: "Boolpress",
        };
    },
    components: {
        Header,
        PostList,
    },
};
</script>
