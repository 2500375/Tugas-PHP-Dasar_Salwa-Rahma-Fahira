
<?php

$mahasiswa = [
    ["2501234", "Lee Jeno", "Pendidikan Guru Sekolah Dasar", "jeno@upi.edu", "nilai" => 100],
    ["2502345", "Haechan Lee", "Sistem Telekomunikasi", "echan@upi.edu", "nilai" => 50],
    ["2503456", "Jeong Jaehyun", "Mekatronika dan Kecerdasan Buatan", "jaehyun@upi.edu", "nilai" => 98],
    ["2504567", "Lee Jeongwoo", "Pendidikan Sistem dan Teknologi Informasi", "jeongwoo@upi.edu", "nilai" => 81],
    ["2505678", "Sienna Spiro", "Sistem Telekomunikasi", "spiro@upi.edu", "nilai" => 68],
];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <p>My Website PHP Dasar</p>

        <a href="form_pesan.php" class="btn">Isi Form Pesan</a>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($mahasiswa as $index => $mhs): ?>

                        <?php
                        $nilai = $mhs["nilai"];

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
                        ?>

                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($mhs[0]) ?></td>
                            <td><?= htmlspecialchars($mhs[1]) ?></td>
                            <td><?= htmlspecialchars($mhs[2]) ?></td>
                            <td><?= $nilai ?></td>
                            <td><?= $grade ?></td>
                            <td><?= $status ?></td>
                            <td>
                                <a class="btn"
                                   href="detail.php?nim=<?= urlencode($mhs[0]) ?>">
                                    Lihat Detail
                                </a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
