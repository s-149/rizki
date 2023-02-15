<?php
// Silahkan aktifkan untuk mengetes..
// dengan menghilangkan ini "//"

// **************************************//
// paket sistem 

//include "../../../paket/index/seasion.php";
include"system/koneksi/koneksi.php";
include "system/array/array.php";
include"paket/rupiah/rupiah.php";
// **************************************//


session_start();
if (empty($_SESSION['user']) AND empty($_SESSION['password'])){
	session_start();
	session_destroy();
	header("Location: logout.php");
	
	}
elseif($_SESSION['level'] != 149 ) {
	session_start();
	session_destroy();
	header("Location: logout.php");
	}
else
{
$kode = $_SESSION['user'];

} 

// **************************************//
// paket web

include "paket/rangka_web/pembuka.php"; // head
include "paket/rangka_web/pembuka_body.php"; // body
include "paket/rangka_web/navbar.php"; // header
include "paket/rangka_web/pembuka_content.php"; // rumah konten
 
// **************************************//

// **************************************//
// tampil sistem   
	include"system/variabel/var_db.php";

	include "content.php"; // konten

// **************************************//
		
include "paket/rangka_web/footer.php"; // footer
include "paket/rangka_web/penutup.php"; // js

// **************************************//
?>
