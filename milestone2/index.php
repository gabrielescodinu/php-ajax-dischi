<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="./dist/css/app.css">
</head>
<body>
    <header>
        <div class="container">
          <img src="img/logo.png" alt="logo" />
        </div>
    </header>

    <main>
        <div id="app">
            <div class="cds-container container" >
            <!-- Disco ad esempio -->
            <div v-for="album in albums" class="cd">
                <a href="#">
                <img :src="album.cover">              
                </a>
                <h3>{{album.albumName}}</h3>
                <span class="author">{{album.author}}</span>
                <span class="year">{{album.year}}</span>
            </div>
            </div>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"
        integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ=="
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="./dist/js/app.js"></script>    
</body>
</html>