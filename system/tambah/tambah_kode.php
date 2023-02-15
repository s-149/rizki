			<div class="table-responsive table--no-card m-b-40">
			<h3 class="title-1 m-b-25">** Pilih Pembeli</h3>
                <table class="table table-borderless table-striped table-earning">
                   <thead>
		   			<tr>
						<td><div align="center">No</div></td>
						<?php
							for ($s=0; $s<$jfieldpembeli; $s++) {
						?>
					
						<td>
							<?= $fieldpembeli[$s] ?>
						</td>
						<?php } ?>
						<td><div align="center">Aksi</div></td>
					</tr>
				  </thead>
					<tbody>
					
					
		<?php
			$sql="select * from $tabelpembeli[0] ";
 			$query=mysqli_query($koneksi,$sql);
			$no=1;
			while($data=mysqli_fetch_array($query)) { 
		?>	
					<tr>
					<td><div align="center"><?= $no++ ?></div></td>
					<form action="system/proses/proses_kode.php" method="post" enctype="multipart/form-data" >
						<?php
							for ($s=0; $s<$jfieldpembeli; $s++) {
						?>
					
						<td>
							<?= $data [$fieldpembeli[$s]] ?>
						</td>
						<?php } ?>
						<td>
						<input type="text" hidden="true" name="isi[]" class="form-control" value="<?= $data ['id'] ?>" placeholder="" required autofocus />
	
						<button type="submit" name="tambahkode" class="btn btn-primary">Proses</button>
						</td>
					</form>

					</tr>
		 		<?php } ?>
					</tbody>
		   		</table>
		   	</div>
<br />
