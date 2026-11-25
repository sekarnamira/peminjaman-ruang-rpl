<?php
function kirimNotifikasi($email, $pesan) {
    // Versi latihan: notifikasi ditampilkan sebagai teks, belum dikirim lewat email
    $waktu = date("d-m-Y H:i");
    return "[$waktu] Notifikasi untuk $email: $pesan";
}

// Contoh penggunaan
echo kirimNotifikasi("mahasiswa@example.com", "Peminjaman ruang Anda disetujui.");
?>