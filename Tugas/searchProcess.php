<?php
    session_start();
    include 'koneksi.php';
    $nrp = $_POST['nrp'];
    $query = "select mahasiswa.NRP as NRP, mahasiswa.Nama as Nama,
    mahasiswa.Alamat as Alamat, jurusan.nama as jurusan
    from mahasiswa INNER JOIN jurusan
    ON mahasiswa.id_jur=jurusan.id_jur 
    where mahasiswa.NRP like '$nrp%'";
    $hasil = mysqli_query($koneksi, $query);
    if(mysqli_num_rows($hasil)!=0){
        echo "<script>alert('Data Ditemukan');</script>";
        $_SESSION['search'] = $query;
    }else{
        echo "<script>alert('data tidak ditemukan');</script>";
    }
    echo "<script>location='home.php';</script>";
?>