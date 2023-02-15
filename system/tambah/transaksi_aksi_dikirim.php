<form action="system/proses/proses_transaksi.php" method="post" enctype="multipart/form-data" >
	
	

			<div class="table-responsive table--no-card m-b-40">
			<p>** Data User</p>
                <table class="table table-borderless table-striped table-earning" >
                   <thead>
		   			<tr>
						<td>Nama</td>
						<td>Alamat</td>
						<td>No.Telephone</td>
						<td>Jml Barang</td>
						<td>Subtotal</td>
						<td>User Name</td>
						<td>Komentar</td>
						<td>Aksi</td>
						<td>Id</td>
						<td>Tanggal</td>
						
					</tr>
					</thead>
					<tbody>
		<?php
            $sql="select * from `datapembeli` where `UserName`='$user' and `Aksi`!='Diterima' ";
            $query=mysqli_query($koneksi,$sql);
            $idpembeli=0;
            while($data=mysqli_fetch_array($query)) { 
            	$idpembeli=$data['id'];
        ?>  
					<tr>
					<td><?= $data['Nama'] ?></td>
					<td><?= $data['Alamat'] ?></td>
					<td><?= $data['Telephone'] ?></td>
					<td><?= $data['JumlahBarang'] ?></td>
					<td><?= BuatRp($data['Subtotal']) ?></td>
					<td><?= $data['UserName'] ?></td>
					<td><?= $data['Komentar'] ?></td>
					<td><?= $data['Aksi'] ?></td>
					<td><?= $data['id'] ?></td>
					<td><?= $data['Tanggal'] ?></td>
					</tr>
		<?php } ?>

					</tbody>
		   		</table>
		   	</div>

		   	<div class="table-responsive table--no-card m-b-40">
			<p>** Data Barang Pesanan User</p>
                <table class="table table-borderless table-striped table-earning" >
                   <thead>
		   			<tr>
						<td>Id_Barang</td>
						<td>Gambar_Product</td>
						<td>Nama Barang</td>
						<td>Jumlah</td>
						<td>Total</td>
						<td>diproses</td>
						<td>DiKirim</td>
						<td>DiTerima</td>
						
					</tr>
					</thead>
					<tbody>
		<?php
            $sql="select * from `transaksi` where `UserName`='$user' and `Aksi2`='0' ";
            $query=mysqli_query($koneksi,$sql);
            while($data=mysqli_fetch_array($query)) { 
        ?>  
					<tr>
					<td><input type="hidden" name="idtransaksi[]" value="<?= $data ['id'] ?>" />
						<?= $data['IdBarang'] ?></td>
					<td><img src="paket/gambar/barang/<?= $data['Gambar'] ?>"></td>
					<td><?= $data['NamaBarang'] ?></td>
					<td><?= $data['JumlahBeli'] ?></td>
					<td><?= $data['Total'] ?></td>
					<td><?= $data['Aksi'] ?></td>
					<td><?= $data['Aksi1'] ?></td>
					<td><?= $data['Aksi2'] ?></td>
					</tr>
		<?php } ?>
				
					</tbody>
		   		</table>
		   	</div>

		   		<div class="table-responsive table--no-card m-b-40">
			<p>** Tindak Lanjut Pesanan User</p>
                <table class="table table-borderless table-striped table-earning" >
                <tr>
				<input type="hidden" name="idpembeli" value="<?= $idpembeli ?>">
				<td>
				<div align="center">
				<button type="submit" name="dikirim" class="btn btn-primary">Dikirim</button>
				<button type="submit" name="diterima" class="btn btn-primary">Diterima</button>
				</div>
			    </td>
				</tr>
					
					</tbody>
		   		</table>
		   	</div>
<br />
</form>
		<div class="table-responsive table--no-card m-b-40">
			<p>** Cetak Nota User</p>
                <table class="table table-borderless table-striped table-earning" >
                	<tr>
                		<td>Cetaklah Sebelum Tombol DiTerima diClick. </td>
                	</tr>
                <tr>
				<td>
				<div align="center">
				<form action="cetak_transaksi.php" method="GET">
					<input type="hidden" name="user" value="<?=$user?>">
					<button class="btn btn-primary">Cetak</button>
				</form>
				</div>
			    </td>
				</tr>
					
					</tbody>
		   		</table>
		   	</div>
