<?php

//*************************************************************************//
// Koneksi.. 
// Berfungsi Sebagai Jembatan Penghubung Antara Program Dengan Database.
// Berguna Sebagai Alat untuk CRUD pada sebuah Program.

//*************************************************************************//

?>
<form action="" method="get" enctype="multipart/form-data" >

	<?php
		for ($s=0; $s<$jnavbar; $s++) {
	?>
		<li><button type="submit" name="<?= $navbar[$s] ?>"><?= $navbar[$s] ?></button></li>	 					

	<?php } ?>
	
</form>
