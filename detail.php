
<?php

$mahasiswa = [
    ["2501234", "Lee Jeno", "Pendidikan Guru Sekolah Dasar", "jeno@upi.edu", "nilai" => 100],
    ["2502345", "Haechan Lee", "Sistem Telekomunikasi", "echan@upi.edu", "nilai" => 50],
    ["2503456", "Jeong Jaehyun", "Mekatronika dan Kecerdasan Buatan", "jaehyun@upi.edu", "nilai" => 98],
    ["2504567", "Lee Jeongwoo", "Pendidikan Sistem dan Teknologi Informasi", "jeongwoo@upi.edu", "nilai" => 88],
    ["2505678", "Sienna Spiro", "Sistem Telekomunikasi", "spiro@upi.edu", "nilai" => 70],
];

$nim = $_GET["nim"] ?? "";
$data = null;

foreach ($mahasiswa as $mhs) {
    if ($mhs[0] === $nim) {
        $data = $mhs;
        break;
    }
}

if ($data !== null) {
    $nilai = $data["nilai"];

    if ($nilai >= 85) {
        $grade = "A";
    } elseif ($nilai >= 70) {
        $grade = "B";
    } elseif ($nilai >= 60) {
        $grade = "C";
    } else {
        $grade = "D";
    }

    $status = ($nilai >= 70) ? "Lulus" : "Tidak Lulus";
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <?php if ($data !== null): ?>

        <h1>Detail Mahasiswa</h1>
        <p>Informasi lengkap mahasiswa yang dipilih.</p>

        <table>
            <tbody>
                <tr>
                    <th>NIM</th>
                    <td><?= htmlspecialchars($data[0]) ?></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><?= htmlspecialchars($data[1]) ?></td>
                </tr>
                <tr>
                    <th>Jurusan</th>
                    <td><?= htmlspecialchars($data[2]) ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?= htmlspecialchars($data[3]) ?></td>
                </tr>
                <tr>
                    <th>Nilai</th>
                    <td><?= $nilai ?></td>
                </tr>
                <tr>
                    <th>Grade</th>
                    <td><?= $grade ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><?= htmlspecialchars($status) ?></td>
                </tr>
            </tbody>
        </table>

    <?php else: ?>

        <h1>Mahasiswa Tidak Ditemukan</h1>
        <p>Data mahasiswa tidak tersedia.</p>

    <?php endif; ?>

    <a href="index.php" class="btn">Kembali ke Daftar</a>
</div>

</body>
</html>
