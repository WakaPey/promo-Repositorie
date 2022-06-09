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
FROM croissant.maaling T, croissant.raspberry_pi R
WHERE croissant.T.Raspberry_PI_idRaspberry_PI = R.idRaspberry_PI";


?>

<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF=8">
        <title>Razberry Temp</title>
        <link rel="stylesheet" href="css/RazStyle.css">
        <link rel="icon" href="img/NoCode.png" type="image/icon type">
    </head>
    <body>
        <div class="grid-container">
            <div class="item1">Meter</div>
            <div class="item2">
                <?php
                    include 'test2.php';
                ?>
            </div>

            <div class="item3">
                <?php
                    $resultat = $kobling->query($sql);
                    echo "<table>"; // Starter tabellen
                    echo "<tr>"; // Lager en rad med overskrifter
                    echo "<th>Temperatur</th>";
                    echo "</tr>";
                    while($rad = $resultat->fetch_assoc()) {
                    $Temp = $rad["Temp"];
                    echo "<tr>";
                    echo "<td>$Temp</td>";   
                    echo "</tr>";
                    }
                    echo "</table>"; // Avslutter tabellen
                ?>
            </div>  

            <div class="item4">
            <?php
                    $resultat = $kobling->query($sql);
                    echo "<table>"; // Starter tabellen
                    echo "<tr>"; // Lager en rad med overskrifter
                    echo "<th>Trykk</th>";
                    echo "</tr>";
                    while($rad = $resultat->fetch_assoc()) {
                    $Trykk = $rad["Trykk"];
                    echo "<tr>";
                    echo "<td>$Trykk</td>";   
                    echo "</tr>";
                    }
                    echo "</table>"; // Avslutter tabellen
                ?>
            </div>

            <div class="item5">Diagram</div>
            <div class="item6">Buttons</div>
            <div class="item7">Info</div>
            <div class="item8">
            <?php
                    $resultat = $kobling->query($sql);
                    echo "<table>"; // Starter tabellen
                    echo "<tr>"; // Lager en rad med overskrifter
                    echo "<th>Fukt</th>";
                    echo "</tr>";
                    while($rad = $resultat->fetch_assoc()) {
                    $Fukt = $rad["Fukt"];
                    echo "<tr>";
                    echo "<td>$Fukt</td>";   
                    echo "</tr>";
                    }
                    echo "</table>"; // Avslutter tabellen
                ?>
            </div>
            <div class="item9">
            <?php
                    $resultat = $kobling->query($sql);
                    echo "<table>"; // Starter tabellen
                    echo "<tr>"; // Lager en rad med overskrifter
                    echo "<th>Raspberry_Navn</th>";
                    echo "</tr>";
                    while($rad = $resultat->fetch_assoc()) {
                    $Rasnavn = $rad["Raspberry_Navn"];
                    echo "<tr>";
                    echo "<td>$Rasnavn</td>";   
                    echo "</tr>";
                    }
                    echo "</table>"; // Avslutter tabellen
                ?>
            </div>
            <div class="item10">
            <?php
                    $resultat = $kobling->query($sql);
                    echo "<table>"; // Starter tabellen
                    echo "<tr>"; // Lager en rad med overskrifter
                    echo "<th>idRaspberry_PI</th>";
                    echo "</tr>";
                    while($rad = $resultat->fetch_assoc()) {
                    $IdRas = $rad["idRaspberry_PI"];
                    echo "<tr>";
                    echo "<td>$IdRas</td>";   
                    echo "</tr>";
                    }
                    echo "</table>"; // Avslutter tabellen
                ?>
            </div>
                
                
        </div>
    </body>


</html>

