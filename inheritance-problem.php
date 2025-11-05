<?php 

// jual produk komik dan game
class Produk {
    // Property
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;


    // membuat constructor. this ditimpa dengan parameter terbaru
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = 'penerbit', $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    // membuat Method untuk Property di dalam kelas
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // membuat Method infoLengkap
    public function getInfoLengkap() {
        // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ( $this->tipe == "Komik" ) {
            $str .= " - {$this->jmlHalaman} Halaman.";
        }
        if ( $this->tipe == "Game" ) {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        // kembalikan nilai $str
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

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");

$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");

// Komik : Masashi Kishimoto, Shonen Jump
//Game : Neil Druckman, Sony Computer
// Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000)

// Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
// Game : Uncharted | Neil Druckman, Sony Computer (Rp. 250000) ~ 50 Jam.

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

?>