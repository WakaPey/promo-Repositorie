<?php
// Her setter jeg sammen alle filene inn i databasen før jeg includer databasen i indexen  
include 'INSERT_Forfatter.php';
include 'INSERT_Artikkel.php';
include 'INSERT_F_AV_A.php';
include 'INSERT_Fag.php';
include 'INSERT_Fag_has_A.php';
?>

<form method="POST">
    <input type="text" name="ForNavn">
    Forfatter fornavn
    </p>
    <input type="text" name="EtterNavn">
    Forfatter etternavn
    </p>
    <input type="text" name="Kilde">
    Kilder
    </p>
    <input type="text" name="Beskrivelse">
    Beskrivelse
    </p>
    <input type="text" name="FagNavn">
    Fag Navn
    </p>
    <input type="text" name="Klasserom">
    Klasserom
    </p>
    <input type="date" name="Dato">
    Dato
    </p>

    <input type="submit" name="leggtil" value="Legg til">
</form>