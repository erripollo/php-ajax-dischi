const app = new Vue({
    el: '#app',
    data: {
        discs: null
    },
    methods: {

    },
    mounted(){
        axios
        .get('./api/discs.php')
        .then(resp => {
            console.log(resp);
            this.discs = resp.data
        }).catch(e => {
            console.log(e);
        })
    }
})