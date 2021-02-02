<?php

$database = [
    [
        'albumName' => "NEW JERSEY",
        'author' => "Bon Jovi",
        'year' => "1988",
        'cover' => "img/bon-jovi-new-jersey.jpg"
    ],
    [
        'albumName' => "TEN'S SUMMONER'S TALES",
        'author' => "Sting",
        'year' => "1993",
        'cover' => "img/41JD3CW65HL.jpg"
    ],
    [
        'albumName' => "LIVE AT WEMBLEY 86",
        'author' => "Queen",
        'year' => "1992",
        'cover' => "img/R-1246953-1448927086-6590.jpeg.jpg"
    ],
    [
        'albumName' => "STEVE GADD BAND",
        'author' => "Steve Gadd Band",
        'year' => "2018",
        'cover' => "img/SteveGadd-800x723.jpg"
    ],
    [
        'albumName' => "BRAVE NEW WORLD",
        'author' => "Iron Maiden",
        'year' => "2000",
        'cover' => "img/810nSIQOLiL._SY355_.jpg"
    ],
    [
        'albumName' => "ONE MORE CAR, ONE MORE RAIDER",
        'author' => "Eric Clapton",
        'year' => "2002",
        'cover' => "img/Eric_Clapton_OMCOMR.jpg"
    ],
    [
        'albumName' => "MADE IN JAPAN",
        'author' => "Deep Purple",
        'year' => "1972",
        'cover' => "img/51rggtPgmRL.jpg"
    ],
    [
        'albumName' => "AND JUSTICE FOR ALL",
        'author' => "Metallica",
        'year' => "1988",
        'cover' => "img/81r3FVfNG3L._SY355_.jpg"
    ],
];

header('Content-Type: application/json');

echo json_encode($database);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="style.css">
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
<script src="main.js"></script>
    
</body>
</html>