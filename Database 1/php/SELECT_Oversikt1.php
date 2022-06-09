<?php

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

//
$kobling->set_charset("utf8");
$sql = "SELECT f.ForfatterID, f.Fornavn, f.Etternavn, a.Kilde, a.ArtikkelID, a.Beskrivelse, i.FagID, i.FagNavn, i.Klasserom, fha.Dato
FROM forfatter f, artikkel a, forfatter_has_artikkel fha, Fag i, Fag_has_Artikkel faa
WHERE f.ForfatterID = fha.Forfatter_ForfatterID
AND a.ArtikkelID = fha.Artikkel_ArtikkelID
AND i.FagID = faa.Fag_FagID
AND a.ArtikkelID = faa.Fag_FagID";

$resultat = $kobling->query($sql);
echo "<table>"; //Denne delen starter tabellen
echo "<tr>";    // Her lages rutene som man skriver i. Den gir de også overskrifter
echo "<th>Beskrivelse</th>";
echo "<th>Kilde</th>";
echo "<th>Fornavn</th>";
echo "<th>Etternavn</th>";
echo "<th>FagNavn</th>";
echo "<th>Klasserom</th>";
echo "<th>Dato</th>";
echo "<th>Forfatter ID</th>";
echo "<th>Artikkel ID</th>";
echo "<th>Fag ID</th>";



echo "</tr>";
while ($rad = $resultat->fetch_assoc()) {
    // Denne delen er det som sier hvor ting i nettsiden skal gå og hva de gjør. Alt dette må være i lik rekke følge
    // som koden som lager tabbelen ellers 

    $FF = $rad["Fornavn"];
    $FE = $rad["Etternavn"];
    $Kilde = $rad["Kilde"];
    $ABeskrivelse = $rad["Beskrivelse"];
    $FagNavn = $rad["FagNavn"];
    $Klasserom = $rad["Klasserom"];
    $dato = $rad["Dato"];
    $FID = $rad["ForfatterID"];
    $AID = $rad["ArtikkelID"];
    $FagID = $rad["FagID"];

    echo "<tr>";
    echo "<td>$ABeskrivelse</td>";
    echo "<td>$Kilde</td>";
    echo "<td>$FF</td>";
    echo "<td>$FE</td>";
    echo "<td>$FagNavn</td>";
    echo "<td>$Klasserom</td>";
    echo "<td>$dato</td>";
    echo "<td>$FID</td>";
    echo "<td>$AID</td>";
    echo "<td>$FagID</td>";
    

    echo "</tr>";
}
echo "</table>";
?>
