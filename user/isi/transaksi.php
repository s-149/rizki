
<div class="span9">
  <div class="well well-small">
<?php
    $sql="select * from `datapembeli` where `UserName`='$kode' and `Aksi`!='DiTerima' ";
        $query=mysqli_query($koneksi,$sql);
        $aksi2=0;
        while($data=mysqli_fetch_array($query)) 
          { 
          $aksi2= $data['Aksi'];  
          
        ?>

      <?php } ?>

      <?php 
      if ($aksi2!='DiTerima') {
        ?>


    <ul class="breadcrumb">
    <li><a href="?id=1&menu=">Home</a> <span class="divider">/</span></li>
    <li class="active">Transaksi</li>
    </ul> 
    <?php

        $sql="select * from `datapembeli` where `UserName`='$kode' and `Aksi`!='DiTerima' ";
        $query=mysqli_query($koneksi,$sql);
        $Aksi=0;
        while($data=mysqli_fetch_array($query)) 
          { 
          $Aksi = $data['Aksi'];
        ?>
      <?php } ?>


<table class="table table-bordered">
              <thead>
                <tr bgcolor="silver">
                  <th>No</th>
                  <th>Product</th>
                  <th>Nama Barang</th>
                  <th>Harga Satuan</th>
                  <th>Jumlah</th>
                  <th>Total</th>
                  <th>Aksi</th>
				  
				</tr>
              </thead>
              <tbody>
                <?php

        $sql="select * from `transaksi` where `UserName`='$kode' and `Aksi2`!='1' ";
        $query=mysqli_query($koneksi,$sql);
        $no=1;
       $Items=0;
        $Total=0;
        while($data=mysqli_fetch_array($query)) 
          { 
          $Items += $data['JumlahBeli'];  
          $Total += $data['Total'];
        ?>
                <tr>
                  
                  <td><?= $no++ ?></td>
                  <td><img width="60" src="../paket/gambar/barang/<?=$data['Gambar']?>" alt=""/></td>
                  <td><?=$data['NamaBarang']?></td>
                  <td><?=$data['Total']/$data['JumlahBeli']?></td>
                  <td><?=$data['JumlahBeli']?></td>
                  <td><?=$data['Total']?></td>
                  <td><?= $Aksi ?></td>
                  
            </tr>
          <?php } ?>
				
				 <tr>
                  <td colspan="5" style="text-align:right"><strong>TOTAL =</strong></td>
                  <td class="label label-important" style="display:block"> <strong> <?= BuatRp($Total) ?> </strong></td>
                </tr>
				</tbody>
            </table>

            <table class="table table-bordered">
              
       <tr><th>Selesaikan Transaksi dan terima barang pesanan anda. </th></tr>
       <tr> 
       <td>Silahkan Untuk melakukan pembayaran jika <strong>Aksi </strong>Masih dalam proses</td>
        </tr>
        <tr>
          <td>
            Pembayaran dapat dilakukan secara cash dengan datang langsung ke Toko kami ataupun via Transfer dengan menyertakan di deskripsi (Nama Lengkap dan No Telephone) harus sama seperti pada saat mengisi data transaksi.
          </td>
        </tr>
        
            </table> 

        <h5>Via Transfer :</h5>
        <div class="table-responsive">
          <table class="table">
            <tr>
              <td>A.N</td>
              <td>:</td>
              <td></td>
            </tr>
            <tr>
              <td>Rekening</td>
              <td>:</td>
              <td></td>
            </tr>
            <tr>
              <td>Bank</td>
              <td>:</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>
        </div>

            <?php } 
        else 
        {
          echo "Anda belum melakukan Transaksi apapun..... <br><br>";
        }
        ?>
              
  <a href="?id=1&menu=" class="btn btn-large"><i class="icon-arrow-left"></i> Kembali Belanja </a>
  
          </div>
        </div>

        