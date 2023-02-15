
       		<h3 class="title-1 m-b-25">** Tampil Semua Data  <?= $paketbaru ?></h3>
			<div class="table-responsive table--no-card m-b-40">
			<h3 class="title-1 m-b-25">** Kelola Satu-Satu</h3>
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
					<form action="" method="get" enctype="multipart/form-data" >
						<?php
							for ($s=0; $s<$jfieldpembeli; $s++) {
						?>
					
						<td>
							<?= $data [$fieldpembeli[$s]] ?>
						</td>
						<?php } ?>
						<td>
						<input type="text" hidden="true" name="id" class="form-control" value="<?= $data ['id'] ?>" placeholder="" required autofocus />
	
						<button type="submit" name="kelola_pembeli" class="btn btn-primary">Kelola</button>
						</td>
					</form>

					</tr>
		 		<?php } ?>
					</tbody>
		   		</table>
		   	</div>
<br />
