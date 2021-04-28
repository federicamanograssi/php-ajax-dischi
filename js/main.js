// Attraverso l’utilizzo di AXIOS: al caricamento della pagina AXIOS chiederà attraverso una chiamata i dischi a php e li stamperà attraverso VUEJS.
var app = new Vue({
    el:'#root',
    data :{
        albumList :[],
        authorList :[],
        activeAuthor:'',
    },
    mounted(){
            axios
                .get('http://localhost:81/php-ajax-dischi/server.php')
                .then((discList)=>{


                    // // crea lista album-------
                    this.albumList = discList.data;
                    console.log(discList.data);

                    // // estrai artista da lista album---------
                    for( let i=0;i<this.albumList.length;i++){
                        if(!this.authorList.includes(this.albumList[i].author))
                        this.authorList.push(this.albumList[i].author)
                    };
                    console.log(this.authorList)
                })
    },
    methods:{
        onFilterChange(){
            console.log(this.activeAuthor)
        }
    }
})

// Bonus: Attraverso un’altra chiamata AXIOS, filtrare gli album per artista (modificato) 

