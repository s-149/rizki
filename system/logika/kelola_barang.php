<?php
 	if ($query)
		{
		 print "
		 <script>
			alert('Proses Berhasil Dijalankan'); 
			window:location='../../menu.php?paketbaru=barang&tampil_kelola_barang=' ;
		</script>
		 ";
        }
  	else 	
		{
  		print "
		 <script>
			alert('Upzz,,, Terjadi masalah, silahkan ulangi kembali'); 
			window:location='../../menu.php?paketbaru=barang&tampil_kelola_barang=' ;
		</script>
		 ";
	  	}
?>