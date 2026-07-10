<?php
$nama   = "M.Nur Raflin Tiasip";
$nim    = "33337250184";
$ipk    = 3.80;
$aktif  = true;
$skill  = ["HTML", "CSS", "JavaScript", "Python", "PHP"];

echo "<h1>Halo, {$nama}!</h1>";
echo "<p>NIM: {$nim}</p>";
echo "<p>IPK: {$ipk}</p>";

if ($ipk >= 3.75) {
    echo "<p><strong>Status: Cumlaude 🌟</strong></p>";
} elseif ($ipk >= 3.0) {
    echo "<p>Status: Sangat Memuaskan</p>";
} else {
    echo "<p>Status: Memuaskan</p>";
}

echo "<ul>";
foreach ($skill as $item) {
    echo "<li>{$item}</li>";
}
echo "</ul>";
?>
