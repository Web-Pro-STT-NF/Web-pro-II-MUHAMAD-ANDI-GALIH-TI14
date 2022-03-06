<?php
//variabel
$name = 'Andi Galih';
$age = 18;
$weight = 45.5;

//Menampilkan variabel
echo 'Name : ' . $name;
echo '<br>Age : ' . $age;
echo '<br>weight : ' . $weight;

//variabel system
echo '<br>Dokumen Root : '. $_SERVER['DOCUMENT_ROOT'];
echo '<br>Nama File : '. $_SERVER['PHP_SELF'];

//membuat variabel constant
Define('PHI',3.14);
$r = 10;
$luas = PHI * $r * $r;
echo "<br>Luas Lingkaran : $luas";



?>
