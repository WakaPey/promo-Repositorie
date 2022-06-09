<?php

//i denne filen kontrolerer jeg sendingen av spørringen og hvordan alt vil fungere. 

if (isset($_POST["leggtil"])) {
    //Tilkoblings informasjon
    $tjener = "localhost";
    $brukernavn = "root";
    $passord = "root";
    $database = "VetleDB";
    $port = 8889;

    // Denne koden her opretter en kobling.    
    // Den sier at Kobling = brukernavn, passord, databasen og porten. Hvis dette er feil vil koblingen være false.
    // I koden blir det sagt connect_error
    $kobling = new mysqli($tjener, $brukernavn, $passord, $database, $port);
    if ($kobling->connect_error) {
        die("Noe gikk galt: " . $kobling->connect_error);
    }
    $kobling->set_charset("utf8");

    $Kilder = $_POST["Kilde"];
    $Beskrivelser = $_POST["Beskrivelse"];
    $select = "SELECT ArtikkelID FROM artikkel WHERE Kilde ='{$Kilder}' AND Beskrivelse ='{$Beskrivelser}' ";
    $result = $kobling->query($select);
    $result = $result->fetch_array(); 
    $AID = intval($result[0]);

    $Fornavnet = $_POST["ForNavn"];
    $Etternavnet = $_POST["EtterNavn"];
    $select = "SELECT ForfatterID FROM forfatter WHERE ForNavn ='{$Fornavnet}' AND EtterNavn ='{$Etternavnet}' ";
    $result = $kobling->query($select);
    $result = $result->fetch_array();
    $FID = intval($result[0]);

    $dato = $_POST["Dato"];


    $sql = "INSERT INTO forfatter_has_artikkel(Dato, Forfatter_ForfatterID, Artikkel_ArtikkelID) VALUES('$dato','$FID','$AID')";

    //Dette er selve spørringen. Det den gjør utifra det jeg forstår så hvis $kobling får kontakt med query så vil den utføre spørringen.
    //Ellers vil den gi beskjed om at noe var galt med spørringen.
    if ($kobling->query($sql)) {
        
    } else {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
    }
}
?>