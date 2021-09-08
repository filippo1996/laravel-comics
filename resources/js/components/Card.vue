<template>
    <div class="row">
        <div v-for="(comics, key) in comicBooks" :key="key" @click="showComics(key)" class="content col-2">
            <div class="card">
                <img :src="comics.thumb" :alt="comics.title">
            </div>
            <p class="title">{{comics.title}}</p>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            comicBooks: []
        }
    },
    mounted(){
        this.allComics();
    },
    methods: {
        showComics(id){
            this.$router.push({
                name: 'show-comics',
                params: { id }
            })
        },
        allComics(){
            axios.get('/api/comic-books').then(res => {
                this.comicBooks = res.data;
            });
        }
    }
}
</script>

<style scoped lang="scss">
.content{
    margin-right: 20px;
    margin-bottom: 20px;
    cursor: pointer;
}
.card{
    height: 160px;
    overflow: hidden;
    
    img{
        width: 100%;
    }
}
.title{
    color: white;
    text-transform: uppercase;
    margin-top: 10px;
    font-size: 0.8rem;
}
</style>