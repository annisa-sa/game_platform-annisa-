<?php
//menghubungkan file konfigurasi
include("../koneksi.php");

//mengambil ID siswa dari parameter URL
$game_id = $_GET['game_id'];

//mengambil data siswa dari database berdasarkan ID
$query = $db->query("SELECT * FROM games WHERE game_id ='$game_id'");
$games = $query-> fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data gamers |SMK Negeri 4 TanjungPinang</title>
</head>
<body>
    <h3>Edit Data game</h3>
    <form action="proses_edit.php" method="POST">
        <!--Menyimpan ID untuk proses selanjutnya-->
        <input type="hidden" name="game_id" value="<?php echo $games['game_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama game</td>
                <td>
                    <input type="text" name="nama_game"
                    value="<?php echo $games['nama_game']; ?>" required>
</td>
</tr>
<tr>
    <td>Harga</td>
    <td>
        <input type="text" name="harga"
value="<?php echo $games['harga']; ?>"required>
</td>
</tr>
<tr>

<td>Genre</td>
<td>
    <select name="genre" style="width: 100%" required>
        <option value =""disabled>-- pilih salah satu --</option>
        <option value ="action"<?php echo($games['genre'] =='action')
        ?'selected': '';?>>action</option>
        <option value ="adventure"<?php echo($games['genre'] =='adventure')
        ?'selected': '';?>>adventure</option>
        <option value ="horor"<?php echo($games['genre'] =='horor')
        ?'selected': '';?>>horor</option>
        <option value ="RPG"<?php echo($games['genre'] =='RPG')
        ?'selected': '';?>>RPG</option>
        <option value ="shooter"<?php echo($games['genre'] =='shooter')
        ?'selected': '';?>>shooter</option>
        </select>
</td>
</tr>
<tr>
</table>
<button type="submit" name="simpan">Simpan</button>
</form>
</body>
</html>