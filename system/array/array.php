<?php

//******************//
// tabel database

// rangka
// tabel 
// $tabel=array('');
//******************//

//******************//

// navbar
$navbar=array('Rumah','Toko','Barang','Pembeli','Transaksi');
$jnavbar=count($navbar);

//******************//

//******************//

// kode
$kode=array('id');

//******************//

//******************//

// data toko
$tabeltoko=array('datatoko');
$fieldtoko=array('NamaToko', 'AlamatToko', 'Telephone');
$jfieldtoko=count($fieldtoko);

//******************//

//******************//

// data barang
$tabelbarang=array('databarang');
$fieldbarang=array('NamaBarang', 'Satuan', 'HargaBeli', 'HargaJual', 'Stok');
$jfieldbarang=count($fieldbarang);

//******************//

//******************//

// data pembeli
$tabelpembeli=array('datapembeli');
$fieldpembeli=array('Nama', 'Alamat', 'Telephone','Subtotal','JumlahBarang','Subtotal','UserName','Komentar','Aksi');
$jfieldpembeli=count($fieldpembeli);

//******************//

//******************//

// data transaksi
$tabeltransaksi=array('transaksi');
$fieldtransaksi=array('UserName', 'IdBarang',  'NamaBarang', 'JumlahBeli', 'Total', 'Aksi', 'Aksi1', 'Aksi2');
$jfieldtransaksi=count($fieldtransaksi);

//******************//

//******************//

// kode
$tabelkode=array('kode');
$fieldkode=array('idPembeli');
$jfieldkode=count($fieldkode);

//******************//


?>