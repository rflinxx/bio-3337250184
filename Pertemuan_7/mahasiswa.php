<?php
$mahasiswa = [
    "nama"  => "M.Nur Raflin Tiasip",
    "nim"   => "33337250184",
    "prodi" => "Informatika",
    "ipk"   => 3.80,
    "skill" => ["HTML", "CSS", "JavaScript", "Python", "PHP"],
];

echo $mahasiswa["nama"];
echo "<br>";
echo $mahasiswa["ipk"];
echo "<br><br>";

$daftar = [
    ["nama" => "Raflin",  "ipk" => 3.80],
    ["nama" => "Bevan",   "ipk" => 3.70],
    ["nama" => "Alvin", "ipk" => 3.90],
];

foreach ($daftar as $mhs) {
    echo "{$mhs['nama']} — IPK: {$mhs['ipk']}<br>";
}
?>
