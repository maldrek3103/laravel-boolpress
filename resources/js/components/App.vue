<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <Header/>

                    <Body />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Header from './Header.vue';
import Body from './Body.vue';
    export default {
        name: "App",
        components: {
            Header,
            Body,
        },
    };
</script>
