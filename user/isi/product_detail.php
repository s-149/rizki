

<div class="span9">
    <ul class="breadcrumb">
    <li><a href="?id=1&menu=">Home</a> <span class="divider">/</span></li>
    <li class="active">product Details</li>
    </ul>	
    <?php

				$sql="select * from databarang where `id`='$id_barang' ";
 				$query=mysqli_query($koneksi,$sql);
				while($data=mysqli_fetch_array($query)) 
					{ 
				?>
	<div class="row">	  
		<div id="gallery" class="span3">
            <a href="../paket/gambar/barang/<?=$data['Gambar']?>" title="">
				<img src="../paket/gambar/barang/<?=$data['Gambar']?>" style="width:100%" alt=""/>
            </a>
			 
		</div>
		<div class="span6">
			<div class="well well-small">
				<h3><?=$data['NamaBarang']?>  </h3>
				<small></small>
				<hr class="soft"/>
				<form action="" method="post" class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span><?=BuatRp($data['HargaJual'])?></span></label>
					<div class="controls">

					<input type="hidden" name="user" value="<?= $kode ?>">
					<input type="hidden" name="idbarang" value="<?= $data['id'] ?>">
                    <input type="hidden" name="Gambar" value="<?= $data['Gambar'] ?>">
                    <input type="hidden" name="NamaBarang" value="<?= $data['NamaBarang'] ?>">
                    <input type="hidden" name="harga" value="<?= $data['HargaJual'] ?> placeholder=""/>
                    <input type="hidden" name="Stok" value="<?= $data['Stok'] ?>" placeholder=""/>

                    <input type="number" name="jml" class="span1" placeholder="JML :"/>

					  <button type="submit" name="keranjang" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
					</div>
				  </div>
				</form>
				
				<hr class="soft"/>
				<h4>Stok : <?=$data['Stok']?> Item Tersedia.</h4>
			</div>	
		</div>
	</div>
</div>
<?php } ?>

<?php
                if(isset($_POST['keranjang'])){
                    
                    $user   = $_POST['user'];
                    $idbarang   = $_POST['idbarang'];
                    $Gambar   = $_POST['Gambar'];
                    $NamaBarang   = $_POST['NamaBarang'];
                    $StokAwal   = $_POST['Stok'];
                    $jml   = $_POST['jml'];
                    $harga   = $_POST['harga'];
                    $total = $harga * $jml ;
                    $Stok = $StokAwal - $jml ;

                    if ($jml>=$StokAwal) {
                        print "
                            <script>
                                alert('Proses Gagal Dijalankan, Dikarnakan Pesanan melebihi Stok yang ada. Silahkan Kurangi pesanan Atau hubungi toko agar Stok ditambah kembali..'); 
                                window:location='' ;
                            </script>
                            ";
                    }
                    else
                    {
                    
                    $sql = "INSERT INTO `keranjang`(`id_barang`, `Gambar`, `NamaBarang`, `Jumlah`, `Total`, `UserName`, `Aksi`) VALUES('$idbarang','$Gambar','$NamaBarang','$jml','$total','$user','user')";    
                    $query = mysqli_query($koneksi, $sql);
                    if($query)
                    {
                        $sql="UPDATE `databarang` SET `Stok`='$Stok'
                            WHERE `databarang`.`id`='$idbarang'";
                            $query=mysqli_query($koneksi,$sql);
                         print "
                            <script>
                                alert('Proses Berhasil Dijalankan'); 
                                window:location='index.php?id=1&lihatkeranjang=' ;
                            </script>
                            ";
                        
                    }
                    else
                    {
                            print "
                            <script>
                                alert('Proses Gagal Dijalankan, Silahkan Ulangi Kembali'); 
                                window:location='' ;
                            </script>
                            ";
                        }
                       
                    }
                }
                ?>