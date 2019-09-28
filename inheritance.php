<?php

class produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;

    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $jmlHalaman = 0,
        $waktuMain = 0

    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;;
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
    public function getInfoProduk()
    {
        $str = "komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) -{$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends produk
{
    public function getInfoProduk()
    {
        $str = "game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) -{$this->waktuMain} Jam.";
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


$produk1 = new Komik("Naruto", "Masshi Kishimoto", "Shoen Jump", 3000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 25000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
