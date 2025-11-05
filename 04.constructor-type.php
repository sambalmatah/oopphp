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

class CetakInfoProduk {
    // membuat method dengan menyertakan jenis suatu Class: Produk
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        // mengembalikan nilai str agar hasilnya dapat dikelola setelah selesai dieksekusi
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 25000);

// mencetak Method(function) yang ada di class Produk
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "<br>";

// mencetak Method(function) yang ada di class Produk
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo "<br>";

// variabel baru diinstansiasi memiliki Class CetakInfoProduk
$infoProduk1 = new CetakInfoProduk();
// panggil method cetak dengan menyertakan parameter suatu produk
echo $infoProduk1->cetak($produk1);

?>