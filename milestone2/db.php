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