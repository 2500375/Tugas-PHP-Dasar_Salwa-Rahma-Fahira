
<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: form_pesan.php");
    exit;
}

$nama = $_POST["nama"] ?? "";
$email = $_POST["email"] ?? "";
$pesan = $_POST["pesan"] ?? "";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Berhasil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container hasil-card">
        <div class="ikon-sukses">✓</div>

        <h1>Pesan Berhasil Dikirim!</h1>
        <p class="subjudul">
            Terima kasih sudah menghubungi kami ♡
        </p>

        <div class="isi-pesan">
            <p><strong>Nama</strong></p>
            <p><?= htmlspecialchars($nama) ?></p>

            <p><strong>Email</strong></p>
            <p><?= htmlspecialchars($email) ?></p>

            <p><strong>Pesan kamu</strong></p>
            <p><?= nl2br(htmlspecialchars($pesan)) ?></p>
        </div>

        <div class="tombol-hasil">
            <a href="index.php" class="btn-utama">
                🏠 Halaman Utama
            </a>

            <a href="form_pesan.php" class="btn-kedua">
                ✉ Kirim Pesan Lagi
            </a>
        </div>
    </div>
</body>
</html>
