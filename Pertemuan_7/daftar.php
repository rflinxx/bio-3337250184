<?php
$daftar = [
    ["nama" => "M.Nur Raflin Tiasip",  "nim" => "33337250184", "ipk" => 3.80],
    ["nama" => "Bevan Tri",       "nim" => "002", "ipk" => 3.70],
    ["nama" => "Alvin Yafiq",       "nim" => "003", "ipk" => 3.90],
    ["nama" => "Farhan Zatis",         "nim" => "004", "ipk" => 2.95],
    ["nama" => "Zidane Ibrahim",        "nim" => "005", "ipk" => 3.55],
];
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="8">
        <tr>
            <th>No</th><th>Nama</th><th>NIM</th>
            <th>IPK</th><th>Status</th>
        </tr>
        <?php foreach ($daftar as $i => $mhs): ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['nim'] ?></td>
            <td><?= $mhs['ipk'] ?></td>
            <td><?= $mhs['ipk'] >= 3.75 ? 'Cumlaude 🌟' : 'Reguler' ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
