
<?php
$mahasiswa = $mahasiswa ?? [];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>

    <form action="index.php?action=update&id=<?= (int) $mahasiswa['id'] ?>" method="POST">
        <label for="nim">NIM:</label><br>
        <input
            type="text"
            id="nim"
            name="nim"
            value="<?= htmlspecialchars($mahasiswa['nim'] ?? '') ?>"
            required
        >
        <br><br>

        <label for="nama">Nama:</label><br>
        <input
            type="text"
            id="nama"
            name="nama"
            value="<?= htmlspecialchars($mahasiswa['nama'] ?? '') ?>"
            required
        >
        <br><br>

        <label for="prodi">Program Studi:</label><br>
        <input
            type="text"
            id="prodi"
            name="prodi"
            value="<?= htmlspecialchars($mahasiswa['prodi'] ?? '') ?>"
            required
        >
        <br><br>

        <button type="submit">Update</button>
    </form>

    <p><a href="index.php">Kembali ke daftar mahasiswa</a></p>
</body>
</html>
