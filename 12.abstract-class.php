<?php 

// mebuat kelas produk menjadi kelas abstrak
abstract class Produk {
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

    // membuat abtract Method untuk getInfo Produk
    abstract public function getInfoProduk();

    // mengganti nama Mehtod karena getInfoProduk digunakan untuk abstract class
    public function getInfo() {
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
        $str = "Komik : " . parent::getInfo() . " - {$this->jmlHalaman} Halaman.";
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
        $str = "Game : " . parent::getInfo() . " ~ {$this->waktuMain} Jam.";
        // kembalikan nilai $str agar dapat diterima oleh fungsi lain
        return $str;
    }
}

// membuat banyak CetakInfoProduk
class CetakInfoProduk {
    // membuat array
    public $daftarProduk = [];

    // membuat Method baru untuk array
    public function tambahProduk( Produk $produk ) {
        // menambahkan tiap data produk ke dalam array
        $this->daftarProduk[] = $produk;
    }

    // membuat method dengan menyertakan jenis suatu Class: Produk
    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        // melakukan foreach untuk daftarProduk satu per satu
        foreach( $this->daftarProduk as $p ) {
            // membangun string dengan getInfoProduk() milik kelas Produk
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        // mengembalikan nilai str agar hasilnya dapat dikelola setelah selesai dieksekusi
        return $str;
    }
}

// instance kelas Produk
// $produk = new Produk(); // jika instance dibuat untuk kelas abstrak Produk maka akan menghasilkan error

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