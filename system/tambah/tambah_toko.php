
<h3>** Tambah Baru</h3><br />
<form action="system/proses/proses_toko.php" method="post" enctype="multipart/form-data" >
	<?php

		for ($s=0; $s<$jfieldtoko; $s++) {
	?>
	<input type="text" name="isi[]" class="form-control" placeholder="<?= $fieldtoko[$s] ?>" required autofocus /><br />
	<?php } 
	?>

	<!-- gunakan type file dibawah jika akan menginput kan file atau gambar...
		kemudian gunakan juga move upload pada file proses.php ...
	<input type="file" name="file" class="form-control" placeholder="file" />
	-->
	<!-- digunakan jika akan mengupdate data...
	<input type="text" name="kode" class="form-control"  value="" required autofocus />
	<button type="submit" name="rubah" class="btn btn-primary">Rubah</button>
	-->
	<button type="submit" name="tambahtoko" class="btn btn-primary">Tambah</button>		 					
</form>
