
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Form Pesan 💌</h1>
    <p>Silakan isi data dan tulis pesan kamu.</p>

    <form action="hasil_pesan.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama kamu" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email kamu" required>

        <label for="pesan">Pesan:</label>
        <textarea id="pesan" name="pesan" rows="5" placeholder="Tulis pesan kamu di sini..." required></textarea>

        <button type="submit" class="btn">Kirim Pesan</button>
    </form>

    <div class="form-navigation">
    <a href="index.php" class="btn-kembali">
        ← Daftar Mahasiswa
    </a>
</div>

</body>
</html>
