<?php 

// mencantumkan file init.php untuk require
require_once 'App/init.php';

// instance produknya
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

// intance cetakProduk 
$cetakProduk = new CetakInfoProduk();
// tambahkan produk yang dituju
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );

echo $cetakProduk->cetak();

?>