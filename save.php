<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $spesifikasi = $_POST['spesifikasi'];
    $quantity = $_POST['quantity'];
    $invoice = $_POST['invoice'];
    $warehouse = $_POST['warehouse'];

    $data = [
        'nama' => $name,
        'spesifikasi' => $spesifikasi,
        'jumlah' => $quantity,
        'invoice' => $invoice,
        'gudang' => $warehouse
    ];

    $script_url = "https://script.google.com/macros/s/AKfycbx_d_ngwh072qKmkIXf5_07QJ6F-bq1g7GRXEwszTgYmYpf8twLs_EZmevoUPkDyQI/exec";

    $options = [
        'http' => [
            'header'  => "Content-Type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data)
        ]
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($script_url, false, $context);

    echo "<script>alert('Data Berhasil Terkirim !!!'); window.location.href='index.php';</script>";
} else {
    echo "<h2>Permintaan tidak valid.</h2>";
}
?>
