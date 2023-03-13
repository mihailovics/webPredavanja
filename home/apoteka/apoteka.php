<?php 

    const ANDOL = 10;
    const ASPIRIN = 10;
    const VITAMIN = 10;

    echo "<h1> Apoteka - narudzbenica </h1><br>";
    echo "<h2> Fiskalni racun </h2><br>";
    echo "<p>Roba narucena u " . date(DATE_RFC2822) . "</p><br>";

    $andol =  $_POST["kolicina1"];
    $aspirin =  $_POST["kolicina2"];
    $vitaminC =  $_POST["kolicina3"];
    echo "<p> Ukupna kolicina je " . ($andol+$aspirin+$vitaminC) . "<br>";
    echo $andol . " Andol" . "<br>";
    echo $aspirin . " Aspirin" . "<br>";
    echo $vitaminC . " Vitamin C" . "<br>";
    echo "<p>Ukupna cena bez poreza je: " . ($andol*ANDOL+$aspirin*ASPIRIN+$vitaminC*VITAMIN) . "</p>";
    echo "<p>Ukupna cena sa porezom je: " . ($andol*ANDOL+$aspirin*ASPIRIN+$vitaminC*VITAMIN) * 1.08 . "</p>";
    if($_POST["nadji"] == "a"){
        echo "<p> HVALA! </p>";
    }
    else
        echo "<p> Dodjite nam opet!";
?>