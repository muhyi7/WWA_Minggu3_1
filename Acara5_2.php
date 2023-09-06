<?php
$tanggalSekarang = getdate();
$tanggal = $tanggalSekarang['mday'];
$bulan = $tanggalSekarang['mon'];
$tahun = $tanggalSekarang['year'];

echo "Tanggal sekarang: $tanggal-$bulan-$tahun";
?>