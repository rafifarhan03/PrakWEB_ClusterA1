<?php 

	include 'koneksi.php';
	$nrp = $_POST['NRP'];
	$nama = $_POST['Nama'];
	$alamat = $_POST['Alamat'];
	$id_jur = $_POST['id_jur'];

	$query = "insert into mahasiswa values ('$nrp', '$nama', '$alamat', '$id_jur')";
	$hasil = mysqli_query($koneksi, $query);
	if ($hasil) {
		echo "<script>alert('Data berhasil disimpan');</script>";
	}else{
		echo "<script>alert('Data gagal disimpan');</script>";
	}
	echo "<script>location='home.php';</script>";
 ?>