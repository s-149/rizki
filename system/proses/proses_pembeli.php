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

if(isset($_POST['tambahpembeli']))
	{
	$isi=$_POST['isi'];
	$isi0=$isi[0];
	$Subtotal=0;
	$input=count($isi0);
	
	// digunakan jika akan mengupload file atau gambar

	// $file=$_FILES['file']['name'];
	// $source=$_FILES['file']['tmp_name'];
	// $folder='../../../paket/file/';
	// move_uploaded_file($source,$folder.$file);
	//for ($s=0; $s<$input; $s++) 
		{
			$sql= "INSERT INTO `$tabelpembeli[0]`(`$fieldpembeli[0]`,`$fieldpembeli[1]`,`$fieldpembeli[2]`,`$fieldpembeli[3]`) VALUES ('$isi[0]','$isi[1]','$isi[2]','$Subtotal')";
 			$query=mysqli_query($koneksi,$sql);
		}

 			include "../logika/tambah_pembeli.php";
			}
// Rubah Data..

if(isset($_POST['rubah']))
	{
	$Kode=$_POST['id'];	
	$isi=$_POST['isi'];
	$input=count($isi);
	for ($s=0; $s<$input; $s++) 
		{
 		$sql="UPDATE `$tabelpembeli[0]` SET `$fieldpembeli[$s]`='$isi[$s]'
 		WHERE `$tabelpembeli[0]`.$kode[0]='$Kode'";
 		$query=mysqli_query($koneksi,$sql);
		}
	
 		include "../logika/kelola_pembeli.php";
    }



// Hapus Data..
 if(isset($_POST['hapus'])){
 
 $Kode=$_POST['id'];
 $n=count($Kode);
 
 for ($sn=0; $sn<$n; $sn++) 
		{
 $sql="DELETE FROM `$tabelpembeli[0]` WHERE  `$tabelpembeli[0]`.`$kode[0]`='$Kode[$sn]'";
 $query=mysqli_query($koneksi,$sql);
 		}

 		include "../logika/kelola_pembeli.php";
    }

// Format Data..
 if(isset($_POST['format'])){
 /**kode sql untuk memformat isi tabel, jangan sembarang anda memakai kode ini, karna satu kali click seluruh isi dari tabel database akan dihapus permanen */

 $sql="TRUNCATE `$database`.`$tabelpembeli[0]`";
 $query=mysqli_query($koneksi,$sql);

 	include "../logika/tambah_pembeli.php";
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

		        	
                       