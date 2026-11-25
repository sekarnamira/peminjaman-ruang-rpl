<?php
function validasiJadwal($tanggalMulai, $tanggalSelesai) {
    // Versi latihan: cek bahwa jam selesai tidak sebelum jam mulai
    $mulai = strtotime($tanggalMulai);
    $selesai = strtotime($tanggalSelesai);

    if ($mulai === false || $selesai === false) {
        return "Format tanggal tidak valid.";
    }
    if ($selesai <= $mulai) {
        return "Jadwal selesai harus setelah jadwal mulai.";
    }
    return "Jadwal valid.";
}

// Contoh penggunaan
echo validasiJadwal("2026-12-01 08:00", "2026-12-01 10:00");
?>