<?php

// input ketinggian pohon

$tinggi = array(20, 10, 16, 15);

// inisialisasi variabel untuk perhitungan rata-rata

$total_tinggi = 0;

$count = count($tinggi);

// inisialisasi variabel untuk menentukan pohon terbesar, terkecil, dan sedang

$rendah = $tinggi[0];

$sedang = $tinggi[0];

$terbesar = $tinggi[0];

// perulangan untuk menghitung total ketinggian pohon dan menentukan pohon terbesar, terkecil, dan sedang

for ($i = 0; $i < $count; $i++) {

  $total_tinggi += $tinggi[$i];

  if ($tinggi[$i] > $rendah) {

    $rendah = $tinggi[$i];

  }

  if ($tinggi[$i] <= $sedang) {

    $sedang = $sedang[$i];

  }

  if ($tinggi[$i] != $rendah && $tinggi[$i] != $sedang) {

    $terbesar = $tinggi[$i];

  }

}

// hitung rata-rata ketinggian pohon

$ratarata_tinggi= $total_tinggi / $count;

// tampilkan hasil

echo "Rata-rata ketinggian pohon: " . $ratarata_tinggi. " meter<br>";

echo "Pohon paling tinggi: " . $rendah . " meter<br>";

echo "Pohon paling sedang: " . $sedang. " meter<br>";

echo "Pohon paling bawah: " . $terbesar . " meter<br>";

?>

