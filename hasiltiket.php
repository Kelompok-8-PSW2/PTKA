<link rel="stylesheet" href="stylee.css">
</style>
<!-- Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- Datatable -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<table id="example" class="table table-striped table-bordered" style="width:100%" border =1>
    <thead>
    </thead>
    <center><h3>Konfirmasi Tiket Anda</h3></center><br><br>
    <tbody class="tiket">
        <?php
            include 'koneksi.php';
            $no = 1;
            $query = "SELECT * FROM form WHERE id IN (SELECT MAX(id) FROM form)";
            $dewan1 = $koneksi->prepare($query);
            $dewan1->execute();
            $res1 = $dewan1->get_result();
 
            if ($res1->num_rows > 0) {
                while ($row = $res1->fetch_assoc()) {
                    $id = $row['id'];
                    $nama_lengkap = $row['nama_lengkap'];
                    $no_telepon = $row['no_telepon'];
                    $stasiun = $row['stasiun'];
                    $tiket = $row['tiket'];
                    $hari_berangkat = $row['hari_berangkat'];
                    $jam_berangkat = $row['jam_berangkat'];
                    $metode_pembayaran = $row['metode_pembayaran'];
        ?>
        <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><?php echo $nama_lengkap; ?></td>
        </tr>
        <tr>
        <td>Nomor Kursi</td>
        <td>:</td>
        <td><?php echo $id; ?></td>
        </tr>
        <tr>
        <td>No Telepon</td>
        <td>:</td>
        <td><?php echo $no_telepon; ?></td>
        </tr>
        <tr>
        <td>Stasiun Tujuan</td>
        <td>:</td>
        <td><?php echo $stasiun; ?></td>
        </tr>
        <tr>
        <td>Jumlah Tiket</td>
        <td>:</td>
        <td><?php echo $tiket; ?></td>
        </tr>
        <tr>
        <td>Hari Berangkat</td>
        <td>:</td>
        <td><?php echo $hari_berangkat; ?></td>
        </tr>
        <tr>
        <td>Jam Berangkat</td>
        <td>:</td>
        <td><?php echo $jam_berangkat; ?></td>
        </tr>
        <tr>
        <td>Metode Pembayaran</td>
        <td>:</td>
        <td><?php echo $metode_pembayaran; ?></td>
        </tr>
        
          
        <?php } } else { ?> 
            
        <?php } ?>
    </tbody>
</table>
<br>
<center><a href="beranda.php" type="button" class="btn btn-primary btn-lg">Simpan</a></center>


 
