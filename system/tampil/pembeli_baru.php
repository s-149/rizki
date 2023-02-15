 <div class="table-responsive table--no-card m-b-40">
                            <h3>Pembeli Baru.</h3>
                <table class="table table-borderless table-striped table-earning" border="1">
                   <thead>
                    <tr>
                        <?php
                            for ($s=0; $s<$jfieldpembeli; $s++) {
                        ?>
                    
                        <td>
                            <?= $fieldpembeli[$s] ?>
                        </td>
                        <?php } ?>
                        <td>Aksi</td>
                        
                        
                    </tr>
                    </thead>
                    <tbody>
                    
                    
        <?php
            $sql="select * from $tabelpembeli[0] where `Aksi`!='diterima' ";
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
                            <form action="" method="GET">
                                <input type="hidden" name="user" value="<?= $data ['UserName'] ?>">
                                
                                <button name="transaksi_dikirim" class="btn btn-primary">Kelola</button>
                            </form>
                        </td>
                        
                    </tr>
                <?php } ?>
                    </tbody>
                            </table>
                        </div>