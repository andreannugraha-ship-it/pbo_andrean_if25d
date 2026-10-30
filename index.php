<?php 
require('./Property.php')

use Pbo\Marketplace\Produk;

//object
$produk = new Produk ('P001','Laptop', 10000000, 5);


//hasil
echo "produk: ". $produk->nama;
echo "<br>";
echo "harga: ". $produk->harga;
echo "<br>";
echo "stok: ". $produk->stok;
echo "<br>";
echo "pajak: ".$produk->pajak(). "%";
echo "<br>";
echo "total harga setelah pajak: ". $produk->total();