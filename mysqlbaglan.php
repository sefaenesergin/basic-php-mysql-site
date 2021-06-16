<?php
$server = 'localhost';
$user = '284569';
$password = 'qwe123';
$database = '284569';

$baglanti = mysqli_connect($server, $user, $password, $database);

if (!$baglanti) {
    echo "MySQL sunucu ile baglanti kurulamadi! </br>";
    echo "HATA: " . mysqli_connect_error();
    exit;
}

echo "MySQL sunucuya baglanti kuruldu.</br>";
?>
