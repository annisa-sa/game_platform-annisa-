<?php
 session_start(); //mulai sesi
include("../koneksi.php");

if(isset($_POST['simpan'])){
    //ambil data dari form
$game_id=$_POST['game_id'];
$nama_game= $_POST['nama_game'];
$genre=$_POST['genre'];
$harga=$_POST['harga'];

// Buat query untuk memperbarui data siswa
$sql="UPDATE games SET
game_id='$game_id',
nama_game='$nama_game',
genre='$genre',
harga='$harga'
WHERE game_id=$game_id";

    $query =mysqli_query($db, $sql);
    // Simpan pesan notifikasi dalam sesi berdasarkan hasil query
    if ($query) {
        $_SESSION['notifikasi'] = "Data games berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data games gagal diperbarui!";
    }

    // Alihkan ke halaman index.php
    header('Location: index.php');
} else {
    // Jika akses langsung tanpa form, tampilkan pesan error
    die("Akses ditolak...");
}
?>
