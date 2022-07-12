new Vue({
    el:"#app",
    data: {
        pageTitle:"I nostri prodotti",
        listaDischi:[]
    },
    computed: {
    mounted() {
        axios.get("db/api.php")
            .then(resp => {
                this.listaDischi = resp.data.dati;
            })
    },
}
    
})