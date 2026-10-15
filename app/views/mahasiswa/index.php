<?php
// Data mahasiswa dikirim dari Controller.
$mahasiswa = $mahasiswa ?? [];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>  

    <a href="index.php?action=create">Tambah Mahasiswa</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $m): ?>
                <tr>
                    <td><?= htmlspecialchars((string) $m['id']) ?></td>
                    <td><?= htmlspecialchars($m['nim']) ?></td>
                    <td><?= htmlspecialchars($m['nama']) ?></td>
                    <td><?= htmlspecialchars($m['prodi']) ?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?= (int) $m['id'] ?>">Edit</a>
                        |
                        <a href="index.php?action=delete&id=<?= (int) $m['id'] ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>

            <?php if (empty($mahasiswa)): ?>
                <tr>
                    <td colspan="5">Belum ada data mahasiswa.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
