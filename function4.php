<?php
function cekKelulusan($nilai) {
    if ($nilai >= 75) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

// Contoh Pengujian:
echo "Nilai 80: " . cekKelulusan(80); // Output: Lulus
echo "<br>";
echo "Nilai 60: " . cekKelulusan(60); // Output: Tidak Lulus
?>