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

    // membuat Method infoProduk
    public function getInfoProduk() {
        // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        // kembalikan nilai $str
        return $str;
    }
}

// membuat class Komik, anak dari class Produk
class Komik extends Produk {
    public $jmlHalaman;

    // buat construct dengan methode ambil Method dari Parent
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = 'penerbit', $harga = 0, $jmlHalaman = 0 ) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        // tambahkan properti yang belum ada di Method Parent
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        // buat renceana output dengan metode ambil Method dari Parent
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        // kembalikan nilai $str agar dapat diterima oleh fungsi lain
        return $str;
    }
}

// membuat class Game, anak dari class Produk
class Game extends Produk {
    public $waktuMain;

    // buat construct dengan methode ambil Method dari Parent
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = 'penerbit', $harga = 0, $waktuMain = 0 ) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        // tambahkan properti yang belum ada di Method Parent
        $this->waktuMain = $waktuMain;
    }
    
    public function getInfoProduk() {
        // buat renceana output dengan metode ambil Method dari Parent
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        // kembalikan nilai $str agar dapat diterima oleh fungsi lain
        return $str;
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

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

// Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
// Game : Uncharted | Neil Druckman, Sony Computer (Rp. 250000) ~ 50 Jam.

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

?>