<?php 

abstract class Produk {
    // Property
    protected $judul,
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

    // Method getInfoProduk digunakan untuk interface
    // --- AWALNYA ADA METHOD getInfoProduk() DISINI, BERPINDAH KE ATAS InfoProduk() ---

    // membuat public function method untuk getInfo karena class Produk memiliki nilai abstract
    abstract public function getInfo();

    // Method getInfoProduk sudah digunakan sebagai template
    // --- AWALNYA ADA METHOD getInfoProduk() DISINI, BERPINDAH KE ATAS InfoProduk() ---

}

?>