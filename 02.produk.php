<?php 

// jual produk komik dan game
class Produk {
    // Property
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = 'penerbit',
            $harga = 0;

    // Method
    public function sayHello() {
        return "Hello World!";
    }

    // membuat Method untuk Property di dalam kelas
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// // menimpa property
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// // menimpa property
// $produk2->judul = "Assasins Creed";
// $produk2->tambahProperty = "hahahaa";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 25000;


// mencetak Method(function) yang ada di class Produk
echo $produk3->sayHello();

echo "<br>";
echo "<br>";

// mencetak Method(function) yang ada di class Produk
echo "Komik : " . $produk3->getLabel();

echo "<br>";
echo "<br>";

// mencetak Method(function) yang ada di class Produk
echo "Game : " . $produk4->getLabel();

?>