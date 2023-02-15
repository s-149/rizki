
<h3>** Tambah Baru</h3><br />
<form action="system/proses/proses_barang.php" method="post" enctype="multipart/form-data" >
	<?php

		for ($s=0; $s<$jfieldbarang; $s++) {
	?>
	<input type="text" name="isi[]" class="form-control" placeholder="<?= $fieldbarang[$s] ?>" required autofocus /><br />
	<?php } 
	?>

	<!-- gunakan type file dibawah jika akan menginput kan file atau gambar...
		kemudian gunakan juga move upload pada file proses.php ...-->
	<label>Gambar :</label><input type="file" name="gambar" class="form-control" placeholder="" required autofocus="" /><br />

	

		<input type="text" name="produk" class="form-control" placeholder="Product. seperti Unggulan dll" ><br />
	
	<!-- digunakan jika akan mengupdate data...
	<input type="text" name="kode" class="form-control"  value="" required autofocus />
	<button type="submit" name="rubah" class="btn btn-primary">Rubah</button>
	-->
	<button type="submit" name="tambahbarang" class="btn btn-primary">Tambah</button>		 					
</form>
