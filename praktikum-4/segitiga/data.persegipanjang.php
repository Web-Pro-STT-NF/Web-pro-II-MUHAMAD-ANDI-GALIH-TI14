<?php
    require_once "class.persegipanjang.php";
    $persegi1 = new Persegipanjang(15,30);
    $persegi2 = new Persegipanjang(8,16);
    echo "<br> Luas Persegi Panjang 1 : " . $persegi1->luasperspanjang();
    echo "<br> Luas Persegi Panjang 2 : " . $persegi2->luasperspanjang();
    
    echo "<br><hr> Keliling Persegi Panjang 1 : " . $persegi1->kllperspanjang();
    echo "<br>Keliling Persegi Panjang 2 : " . $persegi2->kllperspanjang();
?>