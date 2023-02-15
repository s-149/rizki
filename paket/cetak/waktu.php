            <label>Tanggal dicetak : </label> <?php echo date('l, d-M-Y '); ?>
            <!-- menampilkan waktu versi php 
            <?php echo date('l, d-M-Y H:i:s a'); ?>
            keterangan : 
            1.l untuk menampilkan hari dengan huruf
            2.d untuk menampilkan tanggal
            3.M untuk menampilkan bulan dengan huruf
            4.m untuk menampilkan bulan dengan angka
            5.Y untuk menampilkan tahun lengkap 
            6.y untuk menampilkan tahun namun hanya 2 digit terakhir
            
            7.H untuk menampilkan jam dengan durasi 24 jam
            8.h untuk menampilkan jam dengan durasi 12 jam
            9.i untuk menampilkan menit
            10.s untuk menampilkan detik
            11.a untuk menampilkan am atau pm
            
            menampilkan waktu versi js atau javascript
            <script>document.write(new Date());</script>
            script js diatas memuat waktu yg sangat lengkap, jadi jika ingin dikurangi tinggal disesuaikan.
            
            <form name="Tick">
				<label>Waktu : </label><input type="text" size="12" name="Clock">
				</form>
				</div>
        </div>
        
        <div style="page-break-after:always"></div>
                </div>
        </div>
        
        <script type="text/javascript">
function show()
{
var Digital=new Date()
var hours=Digital.getHours()
var minutes=Digital.getMinutes()
var seconds=Digital.getSeconds()
var dn="AM"
if (hours>12){
dn="PM"
hours=hours-12
}
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
document.Tick.Clock.value=
hours+":"+minutes+":"+seconds+" "+dn
setTimeout("show()",1000)

}
show()
</script>
-->