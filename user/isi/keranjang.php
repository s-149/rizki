
<div class="span9">
  <div class="well well-small">
    <?php

        $sql="select * from `keranjang` where `UserName`='$kode' and `Aksi`='user' ";
        $query=mysqli_query($koneksi,$sql);
        
        $Total=0;
        while($data=mysqli_fetch_array($query)) 
          { 
          $Total = $data['Total'];
        ?>
      <?php } ?>

        <?php 
      if ($Total!="") {
        ?>
    <ul class="breadcrumb">
    <li><a href="?id=1&menu=">Home</a> <span class="divider">/</span></li>
    <li class="active">Product di keranjang</li>
    </ul> 

<div class="table-responsive">
<table class="table table-bordered">
              <thead>
                <tr bgcolor="silver">
                  <th>Aksi</th>
                  <th>No</th>
                  <th>Product</th>
                  <th>Nama Barang</th>
                  <th>Harga Satuan</th>
                  <th>Jumlah Barang</th>
                  <th>Total</th>
				  
				</tr>
              </thead>
              <tbody>
                <?php

        $sql="select * from `keranjang` where `UserName`='$kode' and `Aksi`='user' ";
        $query=mysqli_query($koneksi,$sql);
        $no=1;
       $Items=0;
        $Total=0;
        while($data=mysqli_fetch_array($query)) 
          { 
          $Items += $data['Jumlah'];  
          $Total += $data['Total'];
        ?>
                <tr>
                  <td bgcolor="silver">
                  <form action="proses.php" method="GET">

                    <input type="hidden" name="id" value="<?=$data['id_keranjang']?>">
                    <input type="hidden" name="idbarang" value="<?=$data['id_barang']?>">
                    <input type="hidden" name="Jumlah" value="<?=$data['Jumlah']?>">
                    <button type="submit" class="btn btn-danger" name="HapusKeranjang">Hapus</button>
                  </form>
                  </td>
                  <td><?= $no++ ?></td>
                  <td><img width="60" src="../paket/gambar/barang/<?=$data['Gambar']?>" alt=""/></td>
                  <td><?=$data['NamaBarang']?></td>
                  <td><?=$data['Total']/$data['Jumlah']?></td>
                  <td><?=$data['Jumlah']?></td>
                  <td><?=$data['Total']?></td>
                  
            </tr>
          <?php } ?>
				
				 <tr>
                  <td colspan="6" style="text-align:right"><strong>TOTAL =</strong></td>
                  <td class="label label-important" style="display:block"> <strong> <?= BuatRp($Total) ?> </strong></td>
                </tr>
				</tbody>
            </table>
          </div>

            <table class="table table-bordered">
       <tr><th>Lengkapi Data Transaksi </th></tr>
       <tr> 
       <td>
        <form class="form-horizontal" action="proses.php" method="GET">
          <?php

        $sql="select * from `keranjang` where `UserName`='$kode' and `Aksi`='user' ";
        $query=mysqli_query($koneksi,$sql);
        
       $Items1=0;
        $Total1=0;
        while($data=mysqli_fetch_array($query)) 
          { 
          $Items1 += $data['Jumlah'];  
          $Total1 += $data['Total'];
        ?>
        <input type="hidden" name="idkeranjang[]" value="<?=$data['id_keranjang']?>">
        <input type="hidden" name="idbarang[]" value="<?=$data['id_barang']?>">
        <input type="hidden" name="Gambar[]" value="<?= $data['Gambar'] ?>">
        <input type="hidden" name="NamaBarang[]" value="<?= $data['NamaBarang'] ?>">
        <input type="hidden" name="jumlah[]" value="<?=$data['Jumlah']?>">
        <input type="hidden" name="total[]" value="<?=$data['Total']?>">


      <?php } ?>
          
          <input type="hidden" name="UserName" value="<?= $kode ?>">
          <input type="hidden" name="JmlItem" value="<?= $Items1 ?>">
          <input type="hidden" name="Subtotal" value="<?= $Total1 ?>">

          
          <div class="control-group">
          <label class="control-label" >Nama Lengkap </label>
          <div class="controls">
            <input type="text" name="NamaUser" placeholder="Nama Lengkap">
          </div>
          </div>
          <div class="control-group">
          <label class="control-label" >No.Telephone </label>
          <div class="controls">
            <input type="number" name="Telp" placeholder="No.Telephone">
          </div>
          </div>
          <div class="control-group">
          <label class="control-label" >Alamat Lengkap </label>
          <div class="controls">
            <textarea name="Alamat" class="form-control" rows="10px" placeholder="Alamat Lengkap"></textarea>
          </div>
          </div><br>
          <div class="control-group">
          <label class="control-label" >Komentar </label>
          <div class="controls">
            <textarea name="Komentar" class="form-control" rows="10px" placeholder="Komentar Pengguna Kepada Toko"></textarea>
          </div>
          </div>
          <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn btn-primary" name="TransaksiUser">Kirim Transaksi <i class="icon-arrow-right"></i> </button>
          </div>
          </div>
        </form>         
        </td>
        </tr>
            </table>    


             <?php } 
        else 
        {
          echo "Keranjang Anda saat ini masih kosong..... <br><br>";
        }
        ?>

  <a href="?id=1&menu=" class="btn btn-large"><i class="icon-arrow-left"></i> Kembali Belanja </a>
  
          </div>
        </div>