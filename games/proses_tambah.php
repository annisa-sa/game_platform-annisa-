<!DOCTYPE html>
<html>
<head>
    <title>Data games | SMK Negeri 4 Tanjungpinang</title>
</head>
<body>
    <h3>Tambah Data games</h3>
    <form action="tambah_game.php" method="POST">
        <table border="0">
            <tr>
            <td>Nama game</td>
                <td><input type="text" name="nama_game" required></td>
            </tr>
            <tr>
            <td>harga</td>
                <td><input type="text" name="harga" required></td>
            </tr>
            <tr>
                <td>genre</td>
                <td>
                    <select name="genre" style="width: 100%" required>
                        <option value="" selected disabled>
                            -- Pilih Salah Satu --
                        </option>
                        <option value="action">action</option>
                        <option value="adventure">adventure</option>
                        <option value="horor">horor</option>
                        <option value="RPG">RPG</option>
                        <option value="shooter">shooter</option>
                    </select>
                </td>
            </tr>
            <tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">
            Simpan</button>
            
    </form>
</body>
</html>