<?php 

// jual produk komik dan game
class Produk {
    // Property
    public $judul,
            $penulis,
            $penerbit,
            $harga;

    // membuat constructor. this ditimpa dengan parameter terbaru
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = 'penerbit', $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // membuat Method untuk Property di dalam kelas
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 25000);

$produk3 = new Produk("Dragon Ball"); 

// mencetak Method(function) yang ada di class Produk
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "<br>";

// mencetak Method(function) yang ada di class Produk
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo "<br>";

var_dump($produk1);
echo "<br>";
echo "<br>";

var_dump($produk2);
echo "<br>";
echo "<br>";

var_dump($produk3);

?>