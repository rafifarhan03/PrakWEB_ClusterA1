<?php 
	include 'deleteProcess.php';

	$nrp = $_POST['nrp'];
	$query = "delete * from table where NRP=$nrp";
	$hasil = mysqli_query($koneksi, $query);
	if ($hasil) {
		echo "<script>alert('Data berhasil dihapus');</script>";
	}else{
		echo "<script>alert('Data gagal dihapus');</script>";
	}
	echo "<scrip>location='home.php';</script>";

 ?>