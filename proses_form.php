<?php
  include "koneksi_form.php";
  $nama  = $_REQUEST['nama'];
  $telepon  = $_REQUEST['telepon'];
  $hari  = $_REQUEST['hari'];
  $jam  = $_REQUEST['jam'];
  $metode_pembayaran  = $_REQUEST['metode_pembayaran'];
  $mysqli  = "INSERT INTO form (nama_lengkap, no_telepon, hari_berangkat, jam_berangkat, metode_pembayaran) VALUES ('$nama', '$telepon', '$hari', '$jam', '$metode_pembayaran')";
  $result  = mysqli_query($conn, $mysqli);

  if ($result) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }

  mysqli_close($conn);
?>