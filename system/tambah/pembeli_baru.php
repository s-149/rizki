<form action="" method="get" enctype="multipart/form-data" >
	<input type="text" hidden="true" name="paketbaru" value="<?= $paketnavbar ?>" />
	<button type="submit" name="tampil_kelola_pembeli" class="btn btn-primary">Kelola</button>		<br />	 <br />				
</form>
<form action="system/proses/proses_pembeli.php" method="post" enctype="multipart/form-data" >
	<button type="submit" name="format" class="btn btn-danger">Format Data</button>			<br /><br />	  					
</form>
