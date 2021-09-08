<template>
    <div class="row">
        <h2 class="title">{{ comics.title }}</h2>
        <p class="description">{{ comics.description }}</p>
        <img :src="comics.thumb" :alt="comics.title">
    </div>
</template>

<script>
export default {
    data(){
        return {
            comics: {}
        }
    },
    mounted(){
        let idComics = this.$route.params.id;
        axios.get('/api/comics/' + idComics).then(res => {
            this.comics = res.data;
        });
    }
}
</script>

<style scoped lang="scss">
.title{
    color: white;
    font-size: 2rem;
}

.description{
    color: white;
    margin: 10px 0;
}
</style>