
       		<h3 class="title-1 m-b-25">** Kelola Data </h3>
			<div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                   
					
		<?php
			$sql="select * from $tabelpembeli[0] where `id`='$id' ";
 			$query=mysqli_query($koneksi,$sql);
			while($data=mysqli_fetch_array($query)) { 
		?>	
					
					<form action="system/proses/proses_pembeli.php" method="post" enctype="multipart/form-data" >
						<?php
							for ($s=0; $s<$jfieldpembeli; $s++) {
						?>
						<tr>
						<td>
							<label><?= $fieldpembeli[$s] ?>:</label>

							
						
							<input type="text" name="isi[]" class="form-control" value="<?= $data [$fieldpembeli[$s]] ?>" placeholder="<?= $fieldpembeli[$s] ?>" required autofocus />

							
						</td>
						</tr>
						<?php } ?>
						
						<tr>
						<td>
						<input type="text" hidden="true" name="id" class="form-control" value="<?= $data ['id'] ?>" placeholder="" required autofocus />
						<button type="submit" name="rubah" class="btn btn-primary">Rubah</button>
						<button type="submit" name="hapus" class="btn btn-danger">Hapus</button></td>
					</form>

					</tr>
		 		<?php } ?>
					
		   		</table>
		   	</div>
<br />