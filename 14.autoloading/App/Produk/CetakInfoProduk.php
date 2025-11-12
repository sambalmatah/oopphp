<?php 

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

?>