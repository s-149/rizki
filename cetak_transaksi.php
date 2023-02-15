<?php
// Silahkan aktifkan untuk mengetes..
// dengan menghilangkan ini "//"

// **************************************//
// paket sistem 

//include "../../../paket/index/seasion.php";
include"system/koneksi/koneksi.php";
include "system/array/array.php";
include"system/variabel/var_db.php";
include"paket/rupiah/rupiah.php";
// **************************************//

// **************************************//
// paket web

include "paket/rangka_web/pembuka_cetak.php"; // head
include "paket/rangka_web/pembuka_body.php"; // body
// include "paket/rangka_web/navbar.php"; // header
include "paket/rangka_web/pembuka_content.php"; // rumah konten
 
// **************************************//

// **************************************//
// tampil sistem   
		$user=$_GET['user'];

	 	include "system/tampil/cetak_transaksi.php";
//		include "paket/cetak/waktu.php";
		include "paket/cetak/cetak.php";


// **************************************//
		
//include "paket/rangka_web/footer.php"; // footer
include "paket/rangka_web/penutup.php"; // js

// **************************************//
?>
