<?php

// **************************************//

// Rumah
	
// ***************************************//

// **************************************//

// Rumah
if(isset($_GET['Rumah']))
	{
 		include "paket/rangka_web/content.php";
 		include "system/tampil/pembeli_baru.php";
	}
	
// ***************************************//

// **************************************//

// Toko
	
// ***************************************//

// **************************************//

// Toko
if(isset($_GET['Toko']))
	{
		$paketnavbar='toko';
		//include "system/tambah/toko_baru.php";
		include "system/tampil/tampil_toko.php";
		include "system/kelola/kelola_toko.php";
	}

// Baru
if(isset($_GET['toko_baru']))
	{
		$paketbaru=$_GET['paketbaru'];
		 include "system/tambah/tambah_toko.php";
	}

// tampil kelola
if(isset($_GET['tampil_kelola_toko']))
	{
		$paketbaru=$_GET['paketbaru'];
//		print $paketbaru ;
 		include "system/kelola/tampil_kelola_toko.php";
		include "system/kelola/hapus_banyak_toko.php";
	}

// kelola
if(isset($_GET['kelola_toko']))
	{
		$id=$_GET['id'];
		 include "system/kelola/kelola_toko.php";
	}
	
// ***************************************//

// **************************************//

// Barang
	
// ***************************************//

// **************************************//

// barang
if(isset($_GET['Barang']))
	{
		$paketnavbar='barang';
		include "system/tambah/barang_baru.php";
		include "system/tampil/tampil_barang.php";
	}

// Baru
if(isset($_GET['barang_baru']))
	{
		$paketbaru=$_GET['paketbaru'];
		 include "system/tambah/tambah_barang.php";
	}

// tampil kelola
if(isset($_GET['tampil_kelola_barang']))
	{
		$paketbaru=$_GET['paketbaru'];
//		print $paketbaru ;
 		include "system/kelola/tampil_kelola_barang.php";
		include "system/kelola/hapus_banyak_barang.php";
	}

// kelola
if(isset($_GET['kelola_barang']))
	{
		$id=$_GET['id'];
		 include "system/kelola/kelola_barang.php";
	}
	
// ***************************************//


// **************************************//

// Pembeli
	
// ***************************************//

// **************************************//

// pembeli
if(isset($_GET['Pembeli']))
	{
		$paketnavbar='pembeli';
		include "system/tambah/pembeli_baru.php";
		include "system/tampil/tampil_pembeli.php";
	}

// Baru
if(isset($_GET['pembeli_baru']))
	{
		$paketbaru=$_GET['paketbaru'];
		 include "system/tambah/tambah_pembeli.php";
	}

// tampil kelola
if(isset($_GET['tampil_kelola_pembeli']))
	{
		$paketbaru=$_GET['paketbaru'];
//		print $paketbaru ;
 		include "system/kelola/tampil_kelola_pembeli.php";
		include "system/kelola/hapus_banyak_pembeli.php";
	}

// kelola
if(isset($_GET['kelola_pembeli']))
	{
		$id=$_GET['id'];
		 include "system/kelola/kelola_pembeli.php";
	}
	
// ***************************************//


// **************************************//

// Transaksi
	
// ***************************************//

// **************************************//

// transaksi
if(isset($_GET['Transaksi']))
	{
		$paketnavbar='transaksi';
		include "system/tambah/transaksi_baru.php";
		include "system/tampil/tampil_transaksi.php";
	}

// Baru
if(isset($_GET['transaksi_baru']))
	{
		$paketbaru=$_GET['paketbaru'];
		 include "system/tambah/tambah_kode.php";
	}

// tambah transaksi
if(isset($_GET['tambah_transaksi']))
	{
//		$paketbaru=$_GET['paketbaru'];
 		include "system/tambah/tambah_transaksi.php";
	}

// transaksi pasti
if(isset($_GET['transaksi_pasti']))
	{
	$IdPembeli=$_GET['IdPembeli'];
	$Nama=$_GET['Nama'];
	$IdBarang=$_GET['IdBarang'];
	$NamaBarang=$_GET['NamaBarang'];
	$JumlahBeli=$_GET['JumlahBeli'];
	$HargaJual=$_GET['HargaJual'];
	$Stok=$_GET['Stok'];
	$Satuan=$_GET['Satuan'];
	
	$input=count($IdBarang);
// 		$paketbaru=$_GET['paketbaru'];
//		print $paketbaru ;
 		include "system/tambah/tambah_transaksi_pasti.php";
	}

// cetak transaksi
if(isset($_GET['cetak_transaksi']))
	{
	
 		$user=$_GET['user'];
//		print $paketbaru ;
		include "system/tampil/cetak_transaksi.php";
//		include "paket/cetak/waktu.php";
//		include "paket/cetak/cetak.php";
		
	}

// kelola
if(isset($_GET['kelola_transaksi']))
	{
		$paketbaru=$_GET['paketbaru'];
		 include "system/kelola/hapus_banyak_transaksi.php";
	}
	

// Transaksi Dikirim
if(isset($_GET['transaksi_dikirim']))
	{
		$user=$_GET['user'];
		 include "system/tambah/transaksi_aksi_dikirim.php";
	}
	
// ***************************************//





?>
