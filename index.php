<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "db_lab");

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendefinisikan variabel $search
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Query berdasarkan pencarian
if ($search) {
    $sql = "SELECT * FROM samples WHERE nama_sampel LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM samples";
}

// Eksekusi query dan periksa hasilnya
$result = $conn->query($sql);

// Tampilkan error jika query gagal
if (!$result) {
    die("Query gagal: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Data Sampel</title>
</head>
<body>
    <div class="container">
        <h1>Data Sampel di Lab</h1>
        <form method="GET">
            <input type="text" name="search" placeholder="Cari nama sampel..." value="<?= $search ?>">
            <button type="submit">Cari</button>
            <a href="add.php">Tambah Data</a>
        </form>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Input</th>
                    <th>Refco</th>
                    <th>Tangga</th>
                    <th>Rak</th>
                    <th>Kode Rak</th>
                    <th>Kode Sampel</th>
                    <th>Nama Sampel</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php $no = 1; while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['tanggal_input'] ?></td>
                            <td><?= $row['refco'] ?></td>
                            <td><?= $row['tangga'] ?></td>
                            <td><?= $row['rak'] ?></td>
                            <td><?= $row['kode_rak'] ?></td>
                            <td><?= $row['kode_sampel'] ?></td>
                            <td><?= $row['nama_sampel'] ?></td>
                            <td class="action-buttons">
                                <a href="delete.php?id=<?= $row['id'] ?>" class="delete">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="9">Tidak ada data</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
