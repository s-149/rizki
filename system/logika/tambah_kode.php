<?php
 	if ($query)
		{
		 print "
		 <script>
			alert('Proses Berhasil Dijalankan'); 
			window:location='../../menu.php?paketbaru=transaksi&tambah_transaksi=' ;
		</script>
		 ";
        }
  	else 	
		{
  		print "
		 <script>
			alert('Upzz,,, Terjadi masalah, silahkan ulangi kembali'); 
			window:location='../../menu.php?paketbaru=transaksi&transaksi_baru=' ;
		</script>
		 ";
	  	}
?>