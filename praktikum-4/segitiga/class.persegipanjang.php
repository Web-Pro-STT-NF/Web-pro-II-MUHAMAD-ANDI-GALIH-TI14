<?php
 class Persegipanjang { // buka class
 private $panjang;
 private $lebar;
 const dua = 2;
function __construct( $panjang, $lebar ){
  $this->panjang = $panjang;
  $this->lebar = $lebar;  
  }
public function kllperspanjang(){
    return Persegipanjang:: dua * $this->panjang + $this->lebar ;
   }
public function luasperspanjang()
  {
    return $this->panjang * $this->lebar;
   }
 } // tutup class
 ?>