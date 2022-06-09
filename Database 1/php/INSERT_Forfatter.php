<?php
if (isset($_POST["leggtil"])) 
{
    //Tilkobligns informasjon
    $tjener = "localhost";
    $brukernavn = "root";
    $passord = "root";
    $database = "VetleDB";
    $port = 8889;

    // Denne koden her opretter en kobling.    
    // Den sier at Kobling = brukernavn, passord, databasen og porten. Hvis dette er feil vil koblingen være false.
    // I koden blir det sagt connect_error
    $kobling = new mysqli($tjener, $brukernavn, $passord, $database, $port);

    // Hvis jeg får en feil med koblingen så vil denne koden si i fra. Den sjekker rettogslett om koblingen virker
    if ($kobling->connect_error) {
        die("Noe gikk galt: " . $kobling->connect_error);
    }

    // Denne koden angir utf8 som tegnsettet
    $kobling->set_charset("utf8");

    // Dette er Variabelene får Fornavn og Etternavn. Den lagrer også skjema feltene i enklere navn for koden.
    $FF = $_POST["ForNavn"];
    $FE = $_POST["EtterNavn"];


    $sql = "INSERT INTO `forfatter`( `Fornavn`, `Etternavn`) VALUES ( '$FF', '$FE')";

    if($kobling->query($sql)) {
        
        } else {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
        }
}
?>
