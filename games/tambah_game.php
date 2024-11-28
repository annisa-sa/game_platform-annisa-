<?php

session_start(); //mulai sesi
//menghubungkan file ini dengan file konfigurasi database
include("../koneksi.php");

//mengecek apakah tombol 'simpan' telah di tekan
if(isset($_POST['simpan'])){
    /*mengambil nilai dari form input
dan menyimpannya ke dalam variabel*/
$nama_game=$_POST['nama_game'];
$genre= $_POST['genre'];
$harga=$_POST['harga'];
/*menyusun query SQL untuk menambahkan data
ke tabel 'tb_siswa'*/
$sql="INSERT INTO games
(nama_game,genre,harga)
VALUES ('$nama_game','$genre','$harga')";

//menjalankan query dan menyimpan hasilnya dalam variabel $query
$query =mysqli_query($db,$sql);

//simpan pesan di sesi
if($query) {
    $_SESSION['notifikasi'] ="data siswa berhasil di tambahkan!";
}else{
    $_SESSION['notifikasi'] ="data siswa gagal di tambahkan!";
}
//alihkan ke halaman index.php
header('location: index.php');
} else{
//jika akses langsung tanpa form,tampilkan pesan error
die("akses di tolak...");
}
?>