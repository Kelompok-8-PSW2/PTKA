<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
    
	?>
	<h1>Halaman Admin</h1>
    <br>
	<h5>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</h5>
    <a href="index.php" type="button" class="btn btn-primary btn-sm" >Update Promo</a>
    <br><br>
	




<!-- Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- Datatable -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<table id="example" class="table table-striped table-bordered" style="width:100%" border =1>
    <thead>
        <tr>
        <td>No</td>
            <td>Nomor Kursi</td>
            <td>Nama Lengkap</td>
            <td>Nomor Telepon</td>
            <td>Stasiun Tujuan</td>
            <td>Jumlah Tiket</td>
            <td>Hari Berangkat</td>
            <td>Jam Keberangkatan</td>
            <td>Metode Pembayaran</td>
            <td>Hapus Data</td>
        </tr>
    </thead>
    <tbody>
        <?php
            include 'koneksii.php';
            $no = 1;
            $query = "SELECT * FROM form ORDER BY id DESC";
            $dewan1 = $db1->prepare($query);
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
                <td><?php echo $no++; ?></td>
                <td><?php echo $id ?></td>
                <td><?php echo $nama_lengkap; ?></td>
                <td><?php echo $no_telepon; ?></td>
                <td><?php echo $stasiun; ?></td>
                <td><?php echo $tiket; ?></td>
                <td><?php echo $hari_berangkat; ?></td>
                <td><?php echo $jam_berangkat; ?></td>
                <td><?php echo $metode_pembayaran; ?></td>
                <td>
                   
                    <a href="hapus_data.php?aa=<?php echo base64_encode($id) ?>" onclick="javascript: return confirm('Apakah Anda yakin ingin menghapus data ini?')"><button class="btn btn-danger btn-sm"  id="<?php echo $id; ?>"> <i class="fa fa-trash"></i> Hapus </button></a>
                </td>
            </tr>
        <?php } } else { ?> 
            
        <?php } ?>
        
    </tbody>
</table>
<a href="logout.php" type="button"  class="btn btn-danger btn-sm">Keluar</a><br><br>
 
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );

    $(document).on('click', '.hapus_data', function(){
    var id = $(this).attr('id');
    $.ajax({
        type: 'POST',
        url: "hapus_data.php",
        data: {id:id},
        success: function() {
            $('.data').load("data.php");
        }, error: function(response){
            console.log(response.responseText);
        }
    });
});
</script>

</body>
</html>