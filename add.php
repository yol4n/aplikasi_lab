<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Data Sampel</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Data Sampel</h1>
        <form method="POST">
            <label>Tanggal Input:</label>
            <input type="date" name="tanggal_input" required><br>
            <label>Refco:</label>
            <input type="text" name="refco" required><br>
            <label>Tangga:</label>
            <input type="text" name="tangga" required><br>
            <label>Rak:</label>
            <input type="text" name="rak" required><br>
            <label>Kode Rak:</label>
            <input type="text" name="kode_rak" required><br>
            <label>Kode Sampel:</label>
            <input type="text" name="kode_sampel" required><br>
            <label>Nama Sampel:</label>
            <input type="text" name="nama_sampel" required><br>
            <button type="submit">Simpan</button>
            <a href="index.php">Kembali</a>
        </form>
    </div>
</body>
</html>
