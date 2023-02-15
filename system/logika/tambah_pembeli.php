<?php
 	if ($query)
		{
		 print "
		 <script>
			alert('Proses Berhasil Dijalankan'); 
			window:location='../../menu.php?Pembeli=' ;
		</script>
		 ";
        }
  	else 	
		{
  		print "
		 <script>
			alert('Upzz,,, Terjadi masalah, silahkan ulangi kembali'); 
			window:location='../../menu.php?paketbaru=pembeli&pembeli_baru=' ;
		</script>
		 ";
	  	}
?>