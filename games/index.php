<?php
//menghubungkan file config dengan index
include("../koneksi.php");
session_start(); // mulai sesi
?>
<!DOCTYPE html>
<html>
<head>
    <title>data siswa| smkn 4 Tanjungpinang</title>
    <style>
        /*membuat styling pada table*/
     table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2> data games</h2>
    <!-- Tampilkan Notifikasi Jika Ada -->
    <?php if (isset($_SESSION['notifikasi'])): ?>
    <p><?php echo $_SESSION['notifikasi']; ?></p>
        <!-- Hapus notifikasi setelah ditampilkan -->
        <?php unset ($_SESSION['notifikasi']); ?>
    <?php endif; ?>
    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>nama game</th>
                <th>genre</th>
                <th>harga</th>
                <th><a href="proses_tambah.php">tambah data</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1; // Membuat penomoran data dari 1
            // Membuat variabel untuk menjalankan query SQL
            $query = $db->query("SELECT * FROM games");
            /* Perulangan while akan terus berjalan (menampilkan data)
            // Selama kondisi $query bernilai true (adanya data pada table tb_siswa)*/
            while ($games= $query->fetch_assoc()) {
                /*Fungsi fetch_assoc digunakan untuk mengambil
                data perulangan dalam bentuk array*/
            ?> <!-- kode PHP di tutup untuk menyisipkan kode  HTML
            yang akan di looping menggunakan while loop-->
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $games['nama_game'] ?></td>
                <td><?php echo $games['genre'] ?></td>
                <td><?php echo $games['harga'] ?>
                <td align="center">
                    <!-- URL ke halaman edit data dengan menggunakan
                      parameter id pada kolom table -->
                    <a href="edit_game.php?game_id=<?php echo $games['game_id'] ?>">Edit</a>
                    <!--URL untuk menghapus data dengan menggunakan parameter id
                    pada kolom table dan alert confirmasi hapus data-->
                    <a onclick="return confirm('Anda yakin ingin menghapus data?')" 
                    href="hapus_game.php? game_id=<?php echo $games['game_id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php
            } /*mengakhiri proses perulangan while yang di mulai pada baris 44 */
            ?>
            </tbody>
        </table>
        <!-- mengihitung jumlah baris yang ada pada table(games)-->
<p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>