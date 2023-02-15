	  <?php 
	  // where $pilih_field='$pilih_isi'
			$sql="select * from `kode` ";
 			$query=mysqli_query($koneksi,$sql);
				// $plus digunakan jika field menggunakan id primary key
				// fungsinya agar dapat meloncat ke data setelah id primary key
				// $plus=1; 
				// $n=$jfield+$plus;
				// for ($s=1; $s<$n; $s++) 
				// 	{
				// menyiapkan variabel yang kosong..
				// variabel ini menggunakan pengulangan for dengan jumlah max diambil
				// berdasarkan jumlah array field table pada file array.php
				// namun dikarnakan tabel tersebut menggunakan id primary pada field pertama 
				// maka jumlah pengulangan ditambah satu agar id primary tersebut dapat dilewat
				// bertujuan agar menjaga privasi sistem, 
				// jika id primary ingin ditampilkan maka ubah isi $s menjadi 0 pada pengulangan for
				// agar pengulangan dimulai dari baris pertama atau array[0]
				
				//		$isi_field[$s]=0;
					$idpembeli=0;
				// 	}
			while($data=mysqli_fetch_array($query)) 
				{ 
				// $plus digunakan jika field menggunakan id primary key
				// fungsinya agar dapat meloncat ke data setelah id primary key
				// $plus=1; 
				// $n=$jfield+$plus;
				// for ($s=1; $s<$n; $s++) 
				//	{
				// mengisi variabel dengan isi field sesuai array yang di input pada file array.php
				// proses isi ulang ini bersifat dinamis ya dan boleh dikembangkan lagi...
				
				//		$isi_field[$s]=$data [$s];
					$idpembeli=$data ['idPembeli'];
				//	}
				}
				
				// Jika hendak menampilkan maka dibutuhkan fungsi include atau require
				// Seperti dibawah ini,, 
				// include "../variabel/var_db.php";
				
				// uraiannya seperti ini,, 
				// memanggil menggunakan fungsi include
				// nama file yaitu var_db.php
				// file var_db.php tersebut berada pada folder variabel
				// folder variabel tersebut berada diluar folder pemanggil maka ditambahkan "../"
				// arti dari ../ ini yaitu file berada diluar folder pemanggil, jika melewati 2 folder 
				// maka penulisan nya seperti ini ../../ kemudian tuliskan nama file nya..
				 
				// Untuk menampilkan isi variabel nya gunakan fungsi print atau echo
				// seperti dibawah ini ya contoh nya...
				// print $isi_field[2];
		
		// kode
			$sql="select * from datatoko ";
 			$query=mysqli_query($koneksi,$sql);
				
					$IdToko=0;
					$NamaToko=0;
					$AlamatToko=0;
					$TelpToko=0;
					
			while($data=mysqli_fetch_array($query)) 
				{ 
				
					$idtoko=$data ['id'];
					$NamaToko=$data ['NamaToko'];
					$AlamatToko=$data ['AlamatToko'];
					$TelpToko=$data ['Telephone'];
					
				}
				
			$sql="select * from kode ";
 			$query=mysqli_query($koneksi,$sql);
				
					$idkode=0;
					$Sub=0;
				
			while($data=mysqli_fetch_array($query)) 
				{ 
				
					$idkode=$data ['id'];
					$Sub +=$data ['Subtotal'];
				
				}
				
			$sql="select * from transaksi where `Aksi2`='1' ";
 			$query=mysqli_query($koneksi,$sql);
				
					$JumlahBeli=0;
					$total_harga=0;
				
			while($data=mysqli_fetch_array($query)) 
				{ 
				
					$JumlahBeli +=$data ['JumlahBeli'];
					$total_harga +=$data ['Total'];
				
				}
				
			$sql="select * from databarang ";
 			$query=mysqli_query($koneksi,$sql);
				
					$Keuntungan=0;
					
				
			while($data=mysqli_fetch_array($query)) 
				{ 
				
					$Keuntungan +=($data ['HargaJual']-$data ['HargaBeli'])*$data ['Stok'];
				
				}


				
			$sql="select * from databarang where `Stok` < 10 ";
 			$query1=mysqli_query($koneksi,$sql);
			if(mysqli_num_rows($query1) !== 0)
				{
					
					//echo "Stok Barang Ada yg sudah Menipis, Cek Stok Sekarang.";
				}
			else
				{		
					// echo "";
				}
							
			$sql="select * from datapembeli ";
 			$query=mysqli_query($koneksi,$sql);
				
					$belanja=mysqli_num_rows($query);
				
			
				
								
		?>	