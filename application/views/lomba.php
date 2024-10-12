<?php
  
date_default_timezone_set('Asia/Jakarta');
function getWaktu() {
    $saatIni = date("H");
    
    if ($saatIni < 5) {
        return "Malam";
    } elseif ($saatIni >= 5 && $saatIni < 9) {
        return "Pagi";
    } elseif ($saatIni >= 9 && $saatIni < 15) {
        return "Siang";
    } elseif ($saatIni >= 15 && $saatIni < 18 ) {
        return "Sore";
    } else {
        return "Malam";
    }
}

function salam($nama) {
    $currentTime = getWaktu();
    return "Selamat $currentTime, $nama!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
</head>
<body>
    <h1>Daftar Lomba</h1>
    <h3><i><?= salam('Admin') ?></i></h3><br>
    <a href="<?= base_url() ?>Login/logout">Log Out</a>

    <ul>
        <li><a href="<?= base_url('admin/beranda') ?>">Beranda</a></li>
        <li><a href="<?= base_url('admin/daftarLomba') ?>">Daftar Lomba</a></li>
        <li><a href="<?= base_url('admin/aboutUs') ?>">About Us</a></li>
    </ul>
