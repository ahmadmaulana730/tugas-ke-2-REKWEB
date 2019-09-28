<?php

class produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel()
    {
        return "$this->penulis,$this->penerbit";
    }
}


// $produk1 = new produk();
// $produk2 = new produk();


$produk3 = new produk();
$produk3->judul = "naruto";
$produk3->penulis = "naruto";
$produk3->penerbit = "shonen jump";
$produk3->harga = "30000";

$produk4 = new produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "sont computer";
$produk4->harga = "25000";

echo "Film : " . $produk3->getLabel();
echo "<br>";
echo "komik : " . $produk4->getLabel();
