<?php
// 1. Mendefinisikan function dengan return value
function hitungLuasPersegi($sisi) {
    $luas = $sisi * $sisi;
    return $luas; // Mengembalikan hasil perhitungan
}

// 2. Memanggil function dan menyimpan hasilnya di variabel
$hasil = hitungLuasPersegi(5);

// 3. Menampilkan hasil
echo "Luas persegi dengan sisi 5 adalah: " . $hasil;
?>