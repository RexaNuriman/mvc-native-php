
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>

    <form action="index.php?action=store" method="POST">
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" required>
        <br><br>

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required>
        <br><br>

        <label for="prodi">Program Studi:</label><br>
        <input type="text" id="prodi" name="prodi" required>
        <br><br>

        <button type="submit">Simpan</button>
    </form>

    <p><a href="index.php">Kembali ke daftar mahasiswa</a></p>
</body>
</html>
