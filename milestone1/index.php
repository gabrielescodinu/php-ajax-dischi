<?php

$database = [
    [
        'album name' => "NEW JERSEY",
        'author' => "Bon Jovi",
        'year' => "1988",
        'cover' => "img/bon-jovi-new-jersey.jpg"
    ],
    [
        'album name' => "TEN'S SUMMONER'S TALES",
        'author' => "Sting",
        'year' => "1993",
        'cover' => "img/41JD3CW65HL.jpg"
    ],
    [
        'album name' => "LIVE AT WEMBLEY 86",
        'author' => "Queen",
        'year' => "1992",
        'cover' => "img/R-1246953-1448927086-6590.jpeg.jpg"
    ],
    [
        'album name' => "STEVE GADD BAND",
        'author' => "Steve Gadd Band",
        'year' => "2018",
        'cover' => "img/SteveGadd-800x723.jpg"
    ],
    [
        'album name' => "BRAVE NEW WORLD",
        'author' => "Iron Maiden",
        'year' => "2000",
        'cover' => "img/810nSIQOLiL._SY355_.jpg"
    ],
    [
        'album name' => "ONE MORE CAR, ONE MORE RAIDER",
        'author' => "Eric Clapton",
        'year' => "2002",
        'cover' => "img/Eric_Clapton_OMCOMR.jpg"
    ],
    [
        'album name' => "MADE IN JAPAN",
        'author' => "Deep Purple",
        'year' => "1972",
        'cover' => "img/51rggtPgmRL.jpg"
    ],
    [
        'album name' => "AND JUSTICE FOR ALL",
        'author' => "Metallica",
        'year' => "1988",
        'cover' => "img/81r3FVfNG3L._SY355_.jpg"
    ],
];
    
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
        <div class="cds-container container" >
        <?php for ($i=0; $i < count($database); $i++) { ?>
          <!-- Disco ad esempio -->
          <div class="cd">
            <a href="#">
                <img src="<?php echo $database[$i]['cover']?>">              
            </a>
            <h3><?php echo $database[$i]['album name']?></h3>
            <span class="author"><?php echo $database[$i]['author'] ?></span>
            <span class="year"><?php echo $database[$i]['year'] ?></span>
          </div>
          <?php } ?>
        </div>
    </main>
    
</body>
</html>