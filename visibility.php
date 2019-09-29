<?php

class produk
{
    public $judul,
        $penulis,
        $penerbit;
    protected $diskon = 0;

    private $harga;


    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0


    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function getInfoProduk()
    {

        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";

        return $str;
    }


    public function getLabel()
    {
        return "$this->penulis,$this->penerbit";
    }
}

class Komik extends produk
{
    public $jmlHalaman;
    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $jmlHalaman = 0
    ) {
        parent::__construct(
            $judul,
            $penulis,
            $penerbit,
            $harga
        );
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "komik : " . parent::getInfoProduk() . " -{$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends produk
{
    public $waktuMain;
    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $waktuMain = 0
    ) {
        parent::__construct(
            $judul,
            $penulis,
            $penerbit,
            $harga
        );
        $this->waktuMain = $waktuMain;
    }
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    public function getInfoProduk()
    {
        $str = "game : " . parent::getInfoProduk() .  "-{$this->waktuMain} Jam.";
        return $str;
    }
}
class CetakInfoProduk
{
    public function cetak(produk $produk)
    {
        $str = "{$produk->judul}|{$produk->getLabel()}(Rp. {$produk->harga}) ";

        return $str;
    }
}
// $produk1 = new produk();
// $produk2 = new produk();


$produk1 = new Komik("Naruto", "Masshi Kishimoto", "Shoen Jump", 3000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 25000,  50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";
$produk2->setDiskon(50);
echo $produk2->getHarga();
