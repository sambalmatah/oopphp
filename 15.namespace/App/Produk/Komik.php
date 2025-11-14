<?php 

// membuat class Komik, anak dari class Produk
// mengimplementasikan InfoProduk interface
class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    // buat construct dengan methode ambil Method dari Parent
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        
        // tambahkan properti yang belum ada di Method Parent
        $this->jmlHalaman = $jmlHalaman;
    }
    
    // memindahkan method getInfo() ke masing-masing child class, agar tetap dapat menerapkan abstract class dari parent
    public function getInfo() {
        // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        // kembalikan nilai $str
        return $str;
    }
    
    public function getInfoProduk() {
        // buat renceana output dengan metode ambil Method dari Parent
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        // kembalikan nilai $str agar dapat diterima oleh fungsi lain
        return $str;
    }
}

?>