<?php

//*************************************************************************//
// Koneksi.. 
// Berfungsi Sebagai Jembatan Penghubung Antara Program Dengan Database.
// Berguna Sebagai Alat untuk CRUD pada sebuah Program.

include"../koneksi/koneksi.php";
include "../array/array.php";

//*************************************************************************//


// ************************************************************* //

/**copas kode disamping dan isi nama variabel beserta nama sesuai paket data $=$_POST[''];  */
/**kode eksekutor */

//******************//

//******************//
// Jika Variabel Bersifat Global atau dapat diakses untuk semua proses 
// Boleh lah Tulis dibawah sini.
// Dan jika Variabel Bersifat Privat Maka Baiknya ditulis di masing-masing 
// proses agar Variabel tersebut tidak mengganggu pemandangan :) 

// Contoh nya seperti ini...
// $Isi2=$_POST['Isi2'];


//******************//


// ************************************************************* //

// Move Upload..
// Digunakan jika akan mengupload sebuah file,gambar,dll.
// gunakan Script dibawah pada proses upload data.

// $keterangan=$_FILES['file']['name'];
// $source=$_FILES['file']['tmp_name'];
// $folder='../gambar/';
                        
// move_uploaded_file($source,$folder.$keterangan);

// ************************************************************* //


// ************************************************************* //

// Perintah Sql Untuk CRUD Dasar...

// 1. INSERT...
// Dijalankan ketika hendak menambah data.
// Penulisan ....
// INSERT INTO `Nama Table`(`Field`) VALUES ('Isi')
// Gunakan Script Kerangka Dibawah 
// $sql="INSERT INTO ``(``, ``) VALUES ('$','$') ";
// $query=mysqli_query($koneksi,$sql);

// 2. UPDATE...
// Dijalankan ketika hendak merubah data.
// Penulisan ....
// UPDATE `Nama Table` SET `Field`='Isi' WHERE `Nama Table`.`Field(primary key)`='(primary key)'
// Gunakan Script Kerangka Dibawah 
// $sql="UPDATE `` SET ``='' WHERE ``.``='' ";
// $query=mysqli_query($koneksi,$sql);

// 3. DELETE...
// Dijalankan ketika hendak menghapus data.
// Penulisan ....
// DELETE FROM `Nama Table` WHERE `Nama Table`.`Field(primary key)`='(primary key)'
// Gunakan Script Kerangka Dibawah 
// $sql="DELETE FROM `` WHERE ``.``='' ";
// $query=mysqli_query($koneksi,$sql);

// ************************************************************* //


// ************************************************************* //

// Perintah Sql untuk Mengelola Database...

// 1. SELECT...
// Dijalankan ketika hendak menampilkan data.
// Penulisan ....
// SELECT * FROM `Nama Table`
// Gunakan Script Kerangka Dibawah 
// $sql="SELECT * FROM `` ";
// $query=mysqli_query($koneksi,$sql);


// ************************************************************* //


// ************************************************************* //

// Struktur ...


// Menambah Data..

if(isset($_POST['tambahtransaksi']))
	{
	/*********************************/
	// Transaksi
	$IdPembeli=$_POST['IdPembeli'];
	$IdBarang=$_POST['IdBarang'];
	$JumlahBeli=$_POST['JumlahBeli'];
	$Total=$_POST['Total'];
	
	$input=count($IdBarang);
	/*********************************/
	
	/*********************************/
	// Pembeli
	// Rubah semua
//	$Pembeli=$_POST['Pembeli'];
//	$jumlah=count($Pembeli);

	// Rubah subtotal
	$Subtotal=$_POST['Subtotal'];
	/*********************************/
	
	/*********************************/
	// Barang
	$Stok=$_POST['Stok'];
	/*********************************/	
	
	/*********************************/
	// kode
	$idkode=$_POST['idkode'];
	
	/*********************************/	
	
	
	// digunakan jika akan mengupload file atau gambar

	// $file=$_FILES['file']['name'];
	// $source=$_FILES['file']['tmp_name'];
	// $folder='../../../paket/file/';
	// move_uploaded_file($source,$folder.$file);
	for ($s=0; $s<$input; $s++) 
		{
			$sql= "INSERT INTO `$tabeltransaksi[0]`(`IdPembeli`, `IdBarang`,`IdKode`, `JumlahBeli`,`Total`) VALUES ('$IdPembeli', '$IdBarang[$s]','$idkode', '$JumlahBeli[$s]', '$Total[$s]')";
 			$query=mysqli_query($koneksi,$sql);
		}
		
		if ($query)
		{
			
			
			//for ($p=0; $p<$jumlah; $p++) 
			//	{
 			//		$sql="UPDATE `$tabelpembeli[0]` SET `$fieldpembeli[$p]`='$Pembeli[$p]'
 			//		WHERE `$tabelpembeli[0]`.$kode[0]='$IdPembeli'";
 			//		$query=mysqli_query($koneksi,$sql);
			//	}
				
					$sql="UPDATE `$tabelpembeli[0]` SET `Subtotal`='$Subtotal'
 					WHERE `$tabelpembeli[0]`.$kode[0]='$IdPembeli'";
 					$query=mysqli_query($koneksi,$sql);
					
					$sql="UPDATE `kode` SET `Subtotal`='$Subtotal'
 					WHERE `kode`.`id`='$idkode'";
 					$query=mysqli_query($koneksi,$sql);
					
			for ($b=0; $b<$input; $b++) 
				{
 					$sql="UPDATE `$tabelbarang[0]` SET `Stok`='$Stok[$b]'
 					WHERE `$tabelbarang[0]`.$kode[0]='$IdBarang[$b]'";
 					$query=mysqli_query($koneksi,$sql);
				}
			
		 	print "
		 <script>
			alert('Proses Berhasil Dijalankan'); 
			window:location='../../menu.php?paketbaru=transaksi&cetak_transaksi=' ;
		</script>
		 ";
        }
  	else 	
		{
  		print "
		 <script>
			alert('Upzz,,, Terjadi masalah, silahkan ulangi kembali'); 
			window:location='../../menu.php?paketbaru=transaksi&tambah_transaksi=' ;
		</script>
		 ";
	  	}

// 			include "../logika/tambah_toko.php";
			}
// Rubah Data..

if(isset($_POST['rubah']))
	{
	$Kode=$_POST['id'];	
	$isi=$_POST['isi'];
	$input=count($isi);
	for ($s=0; $s<$input; $s++) 
		{
 		$sql="UPDATE `$tabeltoko[0]` SET `$fieldtoko[$s]`='$isi[$s]'
 		WHERE `$tabeltoko[0]`.$kode[0]='$Kode'";
 		$query=mysqli_query($koneksi,$sql);
		}
	
 		//include "../logika/kelola_toko.php";
    }

// Rubah Data Aksi Pembeli menjadi Dikirim..

if(isset($_POST['dikirim']))
	{
	$idtransaksi=$_POST['idtransaksi'];	
	$transaksi=count($idtransaksi);

	$idpembeli=$_POST['idpembeli'];	
	
	
 		$sql="UPDATE `datapembeli` SET `Aksi`='Dikirim'
 		WHERE `datapembeli`.`id`='$idpembeli'";
 		$query=mysqli_query($koneksi,$sql);

 		for ($i=0; $i < $transaksi ; $i++) { 
 			$sql1="UPDATE `transaksi` SET `Aksi1`='1'
 			WHERE `transaksi`.`id`='$idtransaksi[$i]'";
 			$query1=mysqli_query($koneksi,$sql1);
 		}

 		
		if ($query)
		{
		 echo "
		 <script>
			alert('Proses Berhasil Dijalankan'); 
			window:location='../../menu.php?Rumah=' ;
		</script>
		 ";
        }
  	else 	
		{
  		echo "
		 <script>
			alert('Proses Berhasil Dijalankan'); 
			window:location='../../menu.php?Rumah=' ;
		</script>
		 ";
	  	}
	
 		
    }

// Rubah Data Aksi Pembeli menjadi Diterima..

if(isset($_POST['diterima']))
	{
	$idtransaksi=$_POST['idtransaksi'];	
	$transaksi=count($idtransaksi);

	$idpembeli=$_POST['idpembeli'];	
	
	
 		$sql="UPDATE `datapembeli` SET `Aksi`='DiTerima'
 		WHERE `datapembeli`.`id`='$idpembeli'";
 		$query=mysqli_query($koneksi,$sql);

 		for ($i=0; $i < $transaksi ; $i++) { 
 			$sql1="UPDATE `transaksi` SET `Aksi1`='1',`Aksi2`='1'
 			WHERE `transaksi`.`id`='$idtransaksi[$i]'";
 			$query1=mysqli_query($koneksi,$sql1);
 		}

 		
		if ($query)
		{
		 echo "
		 <script>
			alert('Proses Berhasil Dijalankan'); 
			window:location='../../menu.php?Rumah=' ;
		</script>
		 ";
        }
  	else 	
		{
  		echo "
		 <script>
			alert('Proses Berhasil Dijalankan'); 
			window:location='../../menu.php?Rumah=' ;
		</script>
		 ";
	  	}
	
 		
    }

// Hapus Data..
 if(isset($_POST['hapus'])){
 
 $Kode=$_POST['id'];
 $n=count($Kode);
 
 for ($sn=0; $sn<$n; $sn++) 
		{
 $sql="DELETE FROM `$tabeltransaksi[0]` WHERE  `$tabeltransaksi[0]`.`$kode[0]`='$Kode[$sn]'";
 $query=mysqli_query($koneksi,$sql);
 		}

 		include "../logika/tambah_Transaksi.php";
    }

// Format Data..
 if(isset($_POST['format'])){
 /**kode sql untuk memformat isi tabel, jangan sembarang anda memakai kode ini, karna satu kali click seluruh isi dari tabel database akan dihapus permanen */

 $sql="TRUNCATE `$database`.`$tabeltransaksi[0]`";
 $query=mysqli_query($koneksi,$sql);

 	include "../logika/tambah_Transaksi.php";
    }

 // Hapus Tabel..
 //if(isset($_POST['hapustabel'])){
 /**kode sql untuk menghapus tabel, jangan sembarang anda memakai kode ini, karna satu kali click seluruh isi dari tabel database akan dihapus permanen */

 //$sql="DROP TABLE `$tabeltoko[0]` ";
 //$query=mysqli_query($koneksi,$sql);

 //	include "../logika/kelola_toko.php";
  //  }

  // Hapus Database..
 //if(isset($_POST['hapusdatabase'])){
 /**kode sql untuk menghapus database, jangan sembarang anda memakai kode ini, karna satu kali click seluruh isi dari tabel database akan dihapus permanen */

 //$sql="DROP DATABASE `$database` ";
 //$query=mysqli_query($koneksi,$sql);

 //	include "logika.php";
  //  }
?>

		        	
                       