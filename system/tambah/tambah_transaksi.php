<form action="" method="get" enctype="multipart/form-data" >

       		<h3 class="title-1 m-b-25">Mulai Transaksi</h3>
			<div class="table-responsive">
			<p>** Data Pembeli</p>
                <table class="table">
                   <thead>
		   			<tr>
						
						<?php
							for ($s=0; $s<$jfieldpembeli; $s++) {
						?>
					
						<td>
							<?= $fieldpembeli[$s] ?>
						</td>
						<?php } ?>
						
					</tr>
				  </thead>
					<tbody>
					
					
		<?php
			$sql="select * from $tabelpembeli[0] where `id`='$idpembeli' ";
 			$query=mysqli_query($koneksi,$sql);
			
			while($data=mysqli_fetch_array($query)) { 
		?>	
					<tr>
					
					
						<?php
							for ($s=0; $s<$jfieldpembeli; $s++) {
						?>
					
						<td>
							<?= $data [$fieldpembeli[$s]] ?>
						</td>
						<?php } ?>
						<td>
						<input type="text" hidden="true" name="IdPembeli" class="form-control" value="<?= $data ['id'] ?>" placeholder="" required autofocus />
						<input type="text" hidden="true" name="Nama" class="form-control" value="<?= $data ['Nama'] ?>" placeholder="" required autofocus />
	
						
						</td>
					

					</tr>
		 		<?php } ?>
					</tbody>
		   		</table>
		   	</div>
<br />
			<div class="table-responsive ">
			<p>** Pilih Barang</p>
                <table class="table ">
                   <thead>
		   			<tr>
						<td><div align="center">No</div></td>
						<td><div align="center">Pilih</div></td>
						<td><div align="center">Jumlah Beli</div></td>
						<?php
							for ($s=0; $s<$jfieldbarang; $s++) {
						?>
					
						<td>
							<?= $fieldbarang[$s] ?>						</td>
						<?php } ?>
						
					</tr>
					</thead>
					<tbody>
		<?php
			$sql="select * from $tabelbarang[0] ";
 			$query=mysqli_query($koneksi,$sql);
			$no=1;
			while($data=mysqli_fetch_array($query)) { 
		?>	
					<tr>
					<td><div align="center"><?= $no++ ?></div></td>
					<td>
					<input type="checkbox" name="IdBarang[]" class="form-control" value="<?= $data ['id'] ?>" title="pilih data yg ingin dihapus" />	
					<input type="text" hidden="true" name="NamaBarang[]" class="form-control" value="<?= $data ['NamaBarang'] ?>" title="pilih data yg ingin dihapus" />	
					<input type="text" hidden="true" name="Satuan[]" class="form-control" value="<?= $data ['Satuan'] ?>" title="pilih data yg ingin dihapus" />	
					
					<input type="text" hidden="true" name="HargaJual[]" class="form-control" value="<?= $data ['HargaJual'] ?>" title="pilih data yg ingin dihapus" />
					<input type="text" hidden="true" name="Stok[]" class="form-control" value="<?= $data ['Stok'] ?>" title="pilih data yg ingin dihapus" />	
						</td>
						
						<td><input type="text" name="JumlahBeli[]" class="form-control" placeholder="Jml Barang yg dibeli :" /></td>
						<?php
							for ($s=0; $s<$jfieldbarang; $s++) {
						?>
					
						<td><?= $data [$fieldbarang[$s]] ?></td>
													
						<?php } ?>
						
					</tr>
		 		<?php } ?>
				<tr>
				<td colspan="<?=$jfieldbarang+3?>">
				  <div align="center">
				    <button type="submit" name="transaksi_pasti" class="form-control btn btn-primary"><marquee behavior="alternate">Proses Sekarang Nih.???</marquee></button>
			      </div></td>
				</tr>
					
					</tbody>
		   		</table>
		   	</div>
<br />
</form>