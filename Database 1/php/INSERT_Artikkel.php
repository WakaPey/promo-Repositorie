<?php
if (isset($_POST["leggtil"])) {

    //Tilkoblings informasjon
    $tjener = "localhost";
    $brukernavn = "root";
    $passord = "root";
    $database = "vetledb";
    $port = 8889;

    // Denne koden her opretter en kobling.    
    // Den sier at Kobling = brukernavn, passord, databasen og porten. Hvis dette er feil vil koblingen være false.
    // I koden blir det sagt connect_error
    $kobling = new mysqli($tjener, $brukernavn, $passord, $database, $port);

    if ($kobling->connect_error) {
        die("Noe gikk galt: " . $kobling->connect_error);
    }

    $kobling->set_charset("utf8");

    $Kilde = $_POST["Kilde"];
    $ABeskrivelse = $_POST["Beskrivelse"];
    $sql = "INSERT INTO artikkel ( Kilde, Beskrivelse) VALUES ('$Kilde', '$ABeskrivelse')";

    if ($kobling->query($sql)) {
        
    } else {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
    }
}
?>
