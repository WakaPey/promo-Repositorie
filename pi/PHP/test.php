

<?php

 // Tilkoblingsinformasjon
 $tjener = "piasvg.mysql.database.azure.com";
 $brukernavn = "croissant";
 $passord = "Karl69420";
 $database = "croissant";
 $port = 3363;
 // Opprette en kobling
 $kobling = new mysqli($tjener, $brukernavn, $passord, $database, $port);
 // Sjekk om koblingen virker
 // if ($kobling->connect_error) {
 // die("Noe gikk galt: " . $kobling->connect_error);
// }
// else {
 // echo "Koblingen virker"; }

 //Angi UTF-8 som tegnsett
 $kobling->set_charset("utf8");
$sql = "SELECT T.Temp, T.Trykk, T.Fukt, T.Dato, R.idRaspberry_PI, R.Raspberry_Navn, R.Rom_id 
FROM raspberrry_pi_db.Maaling T, raspberrry_pi_db.Raspberry_PI R";


?>