<?php 

    const BOMBONA = 10;
    const COKOLADICA = 15;
    const KEKS = 12;

    
    $bombona = $_POST["kol1"];
    $cokoladica = $_POST["kol2"];
    $keks = $_POST["kol3"];
    $adresa = $_POST["kol4"];

    echo "<h1>Bombonjera - Narudzbenica</h1><br>";
    echo "<h2>Fiskalni racun</h2><br>";

    echo "<p>Roba narucena u: " . date(DATE_RFC2822) . "</p><br>";

    echo "<p>Kupili ste sledece artikle: </p><br>";

    echo "<p>Kupljenih artikala:" . ($bombona+$cokoladica+$keks) . "<br>" ;

    echo $bombona . " Bananica<br>";
    echo $cokoladica . " Cokoladica<br>";
    echo $keks . " Keks<br>";

    echo "<p>Racun - ukupno:" . ($bombona*BOMBONA+$cokoladica*COKOLADICA+$keks*KEKS) . " dinara</p><br>";
    echo "<p>Adresa za isporuku: " . $adresa . "</p>";

?>