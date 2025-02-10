<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengiriman Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Form Input Barang</h1>
        <form action="save.php" method="POST">
            <div class="form-group">
                <label for="name">Unit Kerja :</label>
                <input type="text" autocomplete="off" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="name">Spesifikasi Arsip :</label>
                <input type="text" autocomplete="off" id="spesifikasi" name="spesifikasi" required>
            </div>
            <div class="form-group">
                <label for="quantity">Jumlah :</label>
                <input type="number" autocomplete="off" id="quantity" name="quantity" required>
            </div>
            <div class="form-group">
                <label for="invoice">Nomor Kardus :</label>
                <input type="text" autocomplete="off" id="invoice" name="invoice" required>
            </div>
            <div class="form-group">
                <label for="warehouse">Tempat Penyimpanan :</label>
                <input type="text" autocomplete="off" id="warehouse" name="warehouse" required>
            </div>
            <button type="submit" class="btn">KIRIM</button>
        </form>
    </div>
</body>
</html>
