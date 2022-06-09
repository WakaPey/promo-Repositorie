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

    $FagNavn = $_POST["FagNavn"];
    $Klasserom = $_POST["Klasserom"];
    $select = "SELECT FagID FROM Fag WHERE FagNavn ='{$FagNavn}' AND Klasserom ='{$Klasserom}' ";
    $result = $kobling->query($select);
    $result = $result->fetch_array();
    $FagID = intval($result[0]);



    $sql = "INSERT INTO Fag_has_Artikkel(Fag_FagID, Artikkel_ArtikkelID) VALUES('$FagID','$AID')";

    //Dette er selve spørringen. Det den gjør utifra det jeg forstår så hvis $kobling får kontakt med query så vil den utføre spørringen.
    //Ellers vil den gi beskjed om at noe var galt med spørringen.
    if ($kobling->query($sql)) {
        
    } else {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
    }
}
?>