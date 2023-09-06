<!DOCTYPE html>
<html>
<head>
    <title>Penjumlahan Matriks</title>
</head>
<body>
<?php
// Matriks A
$A = array(
    array(1, 1, 1),
    array(2, 2, 2),
    array(3, 3, 3)
);

// Matriks B
$B = array(
    array(3, 3, 3),
    array(2, 2, 2),
    array(1, 1, 1)
);

// Inisialisasi matriks hasil
$hasil = array();

// Melakukan penjumlahan matriks A dan B
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $hasil[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Menampilkan matriks hasil dalam bentuk tabel
echo "<h1>Hasil Penjumlahan Matriks A dan B:</h1>";
echo "<table border='1'>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>" . $hasil[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
