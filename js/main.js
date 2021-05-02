// Attraverso l’utilizzo di AXIOS: al caricamento della pagina AXIOS chiederà attraverso una chiamata i dischi a php e li stamperà attraverso VUEJS.
var app = new Vue({
    el:'#root',
    data :{
        albumList :[],
        authorList :[],
        activeAuthor:'',
    },
    mounted(){
        this.getAuthorsList();
        this.getAlbumsList();
            // axios
            //     .get(window.location.protocol+'//'+window.location.hostname+':'+window.location.port+'/php-ajax-dischi/server.php')
            //     // .get('http://localhost:81/php-ajax-dischi/server.php')
            //     .then((albumList)=>{


            //         // // crea lista album-------
            //         this.albumList = albumList.data;
            //         console.log(albumList.data);

            //         // // estrai artista da lista album---------
            //         // for( let i=0;i<this.albumList.length;i++){
            //         //     if(!this.authorList.includes(this.albumList[i].author))
            //         //     this.authorList.push(this.albumList[i].author)
            //         // };
            //         // this.authorList.sort()
            //     }),
    },
    methods:{
        getAlbumsList(){
            axios
            .get(window.location.protocol + '//' + window.location.hostname +':' + window.location.port +'/php-ajax-dischi/server.php?findList=allAlbums')
            .then((albumList)=>{
                this.albumList = albumList.data;
            })
        },
        getAuthorsList(){
            axios
                .get(window.location.protocol + '//' + window.location.hostname + ':' + window.location.port + '/php-ajax-dischi/server.php?findList=authors')
                .then((authorList)=>{
                    this.authorList = authorList.data.sort();
                })
        },
        onFilterChange(){
            axios
            .get(window.location.protocol +'//'+ window.location.hostname +':'+ window.location.port + '/php-ajax-dischi/server.php?findList=filterByAuthor&currentAuthor='+this.activeAuthor)
            .then((filteredList)=>{
                this.albumList = filteredList.data;
            })       
            // Bonus: Attraverso un’altra chiamata AXIOS, filtrare gli album per artista 
            // console.log(this.activeAuthor);
            // axios
            //     .get('http://localhost:81/php-ajax-dischi/server.php')
            //     .then((albumList)=>{

            //         this.albumList =[];
            //         if(this.activeAuthor == "all"){
            //             this.albumList = albumList.data;
            //         }else{
            //             this.albumList= albumList.data.filter((item)=>{
            //                 return item.author == this.activeAuthor
            //             })
            //         }
            //     })
        }
    }
})


