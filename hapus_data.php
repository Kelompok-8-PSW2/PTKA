<?php
include 'koneksii.php';

if (isset($_GET['aa'])) {
	$id = stripslashes(strip_tags(htmlspecialchars( base64_decode($_GET['aa']) ,ENT_QUOTES)));

	$query = "DELETE FROM form WHERE id=?";
    $dewan1 = $db1->prepare($query);
    $dewan1->bind_param("i", $id);
    
    if ($dewan1->execute()) {
    	echo "<script>alert('Data Berhasil Dihapus');location='halaman_admin.php';</script>";
    } else {
    	echo "<script>alert('Error');window.history.go(-1);</script>";
    }
}

$db1->close();
?>