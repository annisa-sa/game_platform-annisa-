<?php
session_start(); //mulai sesi
include("../koneksi.php");

// periksa apakah ada ID yang di kirim melalu URL
if(isset($_GET['game_id'])){
    //ambil ID dari URL
    $game_id=$_GET['game_id'];

    //buat query untuk menghapus data buku berdasarkan ID
    $sql="DELETE FROM games  WHERE game_id=$game_id";
    $query = mysqli_query($db,$sql);

    //simpan pesan notifikasi dalam sesi berdasarkan hasil query
    if($query){
        $_SESSION['notifikasi'] ="Data game berhasil di hapus!";
    }else{
        $_SESSION['notifikasi'] ="Data game gagal di hapus!";
    }

    //alihkan ke halaman index.php
    header('Location:index.php');
}else{
    //jika akses langsung tanpa ID ,tampilkan pesan error
    die("akses di tolak...");
}
?>