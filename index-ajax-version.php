<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- FONT------>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- JS--- -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link rel="stylesheet" href="css/master.css">
    <title>PHP-Ajax / vue Dischi</title>
</head>
<body>

    <!-- HEADER---- -->
    <header>
        <img src="img/logo_spotify.png" alt="logo Spotify">
    </header>

    <!-- MAIN------ -->
    <main>
        <div class="container-wrapped" id="root">

            <!-- SELECT SECTION--- -->
            <div id="select_section">
                <label for="author_filter"></label>
                <select name="author_filter" id="author_filter" @change="onFilterChange()" v-model="activeAuthor">
                <option value="All">All</option>
                    <option v-for="(author, index) in authorList" :value="authorList[index]">{{authorList[index]}}</option>
                </select>
            </div>

            <!-- DISC SECTION---- -->
            <div id="disc_section">
                <div v-for='album in albumList'class="card">
                    <img :src="album.poster" :alt="album.title">
                    <h2 class="title">{{album.title}}</h2>
                    <p>{{album.author}}</p>
                    <p class="year">{{album.year}}</p>
                </div>   
            </div>

        </div>
    </main>
    <script src="js/main.js"></script>
</body>
</html>