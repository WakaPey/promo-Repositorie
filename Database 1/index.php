<?php

//dette er selve indexen. Alt som skjer i de andre filene kommer gjennom denne

//Tilkoblings informasjon
$tjener = "localhost";
$brukernavn = "root";
$passord = "root";
//Bestemmer Hvilke database jeg bruker
$database = "vetledb";
//bestemmer Hvilke port jeg bruker
$port = 8889;

// Denne koden her opretter en kobling.    
// Den sier at Kobling = brukernavn, passord, databasen og porten. Hvis dette er feil vil koblingen være false.
// I koden blir det sagt connect_error
$kobling = new mysqli($tjener, $brukernavn, $passord, $database, $port);
//Denne kode delen her sjekker om det e connection mellom databasen og nettsiden
if ($kobling->connect_error) {
    die("Noe gikk galt: " . $kobling->connect_error);
} else {
    echo "koblingen virker";
}

$kobling->set_charset("utf8");

//dette her er HTML'en jeg bruker. 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Mystyle.css">
        
    <div class="top-bar"></div>
</head>

<body>
    <?php
    //Her includer jeg Database filen og SELECT_oversikt filen sånn at de fungerer i nettsiden.
    include "PHP/DataBase.php"; 
    include "PHP/SELECT_Oversikt1.php"; 
    ?>
    
</body>

</html>