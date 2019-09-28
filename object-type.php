<?php

class produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis,$this->penerbit";
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


$produk1 = new produk("Naruto", "Masshi Kishimoto", "Shoen Jump", 3000);
$produk2 = new produk("Uncharted", "Neil Druckmann", "Sony Computer", 25000);
$produk3 = new produk("dragon Ball");
echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "game : " . $produk2->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak("sda");
