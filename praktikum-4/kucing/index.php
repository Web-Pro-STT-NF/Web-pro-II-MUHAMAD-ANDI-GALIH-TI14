<?php
include_once "kucing.php";

// membuat objek / instance objek kucing 
$garfield = new kucing("Garfield", 5, "oren" ); 
$bolang = new kucing("Bolang", 3, "Item Putih" );

echo "Nama Kucing : $garfield->nama<br>" ; 
echo "Umur Kucing : $garfield->umur tahun<br>" ; 
echo "Warna Kucing : $garfield->warna<br><hr>" ; 
echo "Nama Kucing : $bolang->nama<br>" ; 
echo "Umur Kucing : $bolang->umur tahun<br>" ;
echo "Warna Kucing : $bolang->warna<br><hr>" ;

echo $garfield->makan(), "<br>";
echo $garfield->tidur(), "<br>";
echo $garfield->lari(), "<br><hr>";
echo $bolang->makan(), "<br>";
echo $bolang->tidur(), "<br>";
echo $bolang->lari();