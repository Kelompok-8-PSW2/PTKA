<?php
  include "koneksi_form.php";
  $nama  = $_REQUEST['nama'];
  $telepon  = $_REQUEST['telepon'];
  $tiket = $_REQUEST['tiket'];
  $stasiun = $_REQUEST['stasiun'];
  $hari  = $_REQUEST['hari'];
  $jam  = $_REQUEST['jam'];
  $metode_pembayaran  = $_REQUEST['metode_pembayaran'];
  $mysqli  = "INSERT INTO form (nama_lengkap, no_telepon, tiket, stasiun, hari_berangkat, jam_berangkat, metode_pembayaran) VALUES ('$nama', '$telepon','$tiket','$stasiun', '$hari', '$jam', '$metode_pembayaran')";
  $result  = mysqli_query($conn, $mysqli);

  if ($result) {
    echo "Input berhasil";
    header("location:hasiltiket.php");
  } else {
    echo "Input gagal";
  }

  mysqli_close($conn);
?>