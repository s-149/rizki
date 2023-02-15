<?php
// mengintegrasikan sistem dengan database dan perangkat pendukung

include "../system/koneksi/koneksi.php"; 

?>


<?php
          // hapus produk di keranjang
          if(isset($_GET['HapusKeranjang']))
            {
             $idkeranjang=$_GET['id'];
             $idbarang=$_GET['idbarang'];
             $Jumlah=$_GET['Jumlah'];

             $sql="select * from `databarang` where `id`='$idbarang' ";
              $query=mysqli_query($koneksi,$sql);
              $data=mysqli_fetch_array($query);
              $StokAwal=$data['Stok'];
              $Stok=$StokAwal+$Jumlah;

             $sql1="DELETE FROM `keranjang` WHERE  `keranjang`.`id_keranjang`='$idkeranjang'";
              $query1=mysqli_query($koneksi,$sql1);

              $sql2="UPDATE `databarang` SET `Stok`='$Stok'
              WHERE `databarang`.`id`='$idbarang'";
              $query2=mysqli_query($koneksi,$sql2);

               if($query1)
                  {
                   echo " <script> 
                          alert('Proses Berhasil Dijalankan'); 
                          window:location='index.php?id=1&lihatkeranjang='; 
                          </script> ";
                  }
               else
                  {
                   echo " <script> 
                          alert('Proses Terhenti, Silahkan Ulangi kembali'); 
                          window:location='index.php?id=1&lihatkeranjang='; 
                          </script> ";
                  }
            }

          ?>

<?php
          // kirim produk di keranjang kepada admin untuk diproses
          if(isset($_GET['TransaksiUser']))
            {
              // looping
             $idkeranjang=$_GET['idkeranjang'];
             $idbarang=$_GET['idbarang'];
             $Gambar=$_GET['Gambar'];
             $NamaBarang=$_GET['NamaBarang'];
             $jumlah=$_GET['jumlah'];
             $total=$_GET['total'];
             $lop=count($idbarang);

             // manual 
             $UserName=$_GET['UserName'];
             $JmlItem=$_GET['JmlItem'];
             $Subtotal=$_GET['Subtotal'];
             $Nama=$_GET['NamaUser'];
             $Telephone=$_GET['Telp'];
             $Alamat=$_GET['Alamat'];
             $Komentar=$_GET['Komentar'];
             

             $sql="INSERT INTO `datapembeli`(`Nama`, `Alamat`, `Telephone`, `JumlahBarang`, `Subtotal`, `UserName`, `Komentar`, `Aksi`) VALUES('$Nama','$Alamat','$Telephone','$JmlItem','$Subtotal','$UserName','$Komentar','diproses')";
              $query=mysqli_query($koneksi,$sql);

              for ($i=0; $i < $lop; $i++) { 
                $sql="INSERT INTO `transaksi`(`UserName`, `IdBarang`, `Gambar`, `NamaBarang`, `JumlahBeli`, `Total`, `Aksi`, `Aksi1`, `Aksi2`) VALUES('$UserName','$idbarang[$i]','$Gambar[$i]','$NamaBarang[$i]','$jumlah[$i]','$total[$i]','1','0','0')";
              $query=mysqli_query($koneksi,$sql);

              }

              
               if($query)
                  {
                    for ($i=0; $i < $lop; $i++) { 
                       $sql="DELETE FROM `keranjang` WHERE `keranjang`.`id_keranjang`='$idkeranjang[$i]'";
                      $query=mysqli_query($koneksi,$sql);

                   echo " <script> 
                          alert('Proses Berhasil Dijalankan'); 
                          window:location='index.php?id=1&lihatkeranjang='; 
                          </script> ";
                        }
                  }
               else
                  {
                   echo " <script> 
                          alert('Proses Terhenti, Silahkan Ulangi kembali'); 
                          window:location='index.php?id=1&lihatkeranjang='; 
                          </script> ";
                  }
            }

          ?>
