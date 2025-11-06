<?php 

// jual produk komik dan game
class Produk {
    // Property
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0; 

    // membuat constructor. this ditimpa dengan parameter terbaru
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // membuat fungsi setJudul baru yang telah diprivate
    public function setJudul( $judul ) {
        $this->judul = $judul;
    }

    // mengambil nilai judul yang telah diprivate
    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    // membuat method setDiskon untuk menghitung harga setelah diskon
    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function setHarga( $harga ) {
        $this->harga = $harga;
    }

    // mengambil nilai harga yang telah diprivate
    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
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
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
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
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
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


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(90);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setJudul("Judul Baru");
echo $produk1->getJudul();
echo "<hr>";

$produk1->setPenulis("Penulis Baru");
echo $produk1->getPenulis();
echo "<hr>";

$produk1->setPenerbit("Penerbit Baru");
echo $produk1->getPenerbit();
echo "<hr>";

$produk1->setDiskon(15);
echo $produk1->getDiskon();
echo "<hr>";

$produk1->setHarga(45000);
echo $produk1->getHarga();
echo "<hr>";

?>