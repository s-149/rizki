<form action="" method="get" enctype="multipart/form-data" >
	<input type="text" hidden="true" name="paketbaru" value="<?= $paketnavbar ?>" />
	<!--<button type="submit" name="transaksi_baru" class="btn btn-primary">+Tambah</button>-->
	<button type="submit" name="kelola_transaksi" class="btn btn-primary">Kelola</button>
	
	<br />	 <br />				
</form>

<form action="system/proses/proses_transaksi.php" method="post" enctype="multipart/form-data" >
	<button type="submit" name="format" class="btn btn-danger">Format Data</button>			<br /><br />	  					
</form>
