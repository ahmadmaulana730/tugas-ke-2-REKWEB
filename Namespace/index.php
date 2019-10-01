<?php

require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Masshi Kishimoto", "Shoen Jump", 3000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 25000,  50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();



use App\Service\User as ServiceUSer;
use App\Produk\User as ProdukUser;

new ServiceUSer();
echo "<br>";
new ProdukUser();
