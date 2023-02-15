<?php
// mengintegrasikan sistem dengan database dan perangkat pendukung

include "../system/koneksi/koneksi.php"; 
include "../system/variabel/var_db.php"; 
include "../paket/rupiah/rupiah.php";

?>

<?php
session_start();
if (empty($_SESSION['user']) AND empty($_SESSION['password'])){
	session_start();
	session_destroy();
	header("Location: ../logout.php");
	
	}
else
{
$kode = $_SESSION['user'];

?>

<?php } ?>


<?php 
// mengelola header dan perangkat pendukung

include "kerangka/heder.php"; 

?>

<?php
// mengelola content

// menu
if(isset($_GET['menu']))
	{
 		// slide menu
 		include "isi/slide_menu.php";

 		// pembuka
		include "kerangka/pembuka_content.php";

		// sidebar
		include "kerangka/sidebar.php";

		// produc terbatas
		include "isi/product_terbatas.php";

		// menu
		include "isi/product_tersedia.php";

		// penutup
		include "kerangka/penutup_content.php";
		
	}


// produc detail
if(isset($_GET['lihatbarang']))
	{
 		$id_barang=$_GET['id'];
 		
 		// pembuka
		include "kerangka/pembuka_content.php";

		// sidebar
		include "kerangka/sidebar.php";

		// produc detail
		include "isi/product_detail.php";

		// menu
		include "isi/product_tersedia.php";

		// penutup
		include "kerangka/penutup_content.php";
	}

// lihat keranjang
if(isset($_GET['lihatkeranjang']))
	{
 		$id_barang=$_GET['id'];
 		
 		// pembuka
		include "kerangka/pembuka_content.php";

		// sidebar
		include "kerangka/sidebar.php";

		// produc di keranjang
		include "isi/keranjang.php";

		// penutup
		include "kerangka/penutup_content.php";
	}

// lihat Transaksi
if(isset($_GET['lihattransaksi']))
	{
 		$id_barang=$_GET['id'];
 		
 		// pembuka
		include "kerangka/pembuka_content.php";

		// sidebar
		include "kerangka/sidebar.php";

		// produc di keranjang
		include "isi/transaksi.php";

		// penutup
		include "kerangka/penutup_content.php";
	}

// cari product
if(isset($_GET['product_cari']))
	{
 		$namabarang=$_GET['namabarang'];
 		
 		// pembuka
		include "kerangka/pembuka_content.php";

		// sidebar
		include "kerangka/sidebar.php";

		// cari product
		include "isi/product_cari.php";

		// penutup
		include "kerangka/penutup_content.php";
	}


?>
<?php 
// mengelola footer dan perangkat pendukung

include "kerangka/footer.php"; 

?>
