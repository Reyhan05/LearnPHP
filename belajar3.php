<?php
    // metode if else
    $a = 'budis';

    //if itu adalah kondisi yang di inginkan
    if ($a = 'budi') {
        // tampilkan hasil
        echo 'Berhasil';
    } else {
        echo 'Gagal';
    }

    // for if else odd even
    for ($i=1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            echo "ganjil <br/>";
        } else {
            echo "genap <br/>";
        }
    }

    echo "<br/>";

    // operator logika
    $laki = 'reyhan';
    $perempuan = 'wanita';

    // && = and ini akan memanggil semua kondisi yang ada di dalam if
    // || = or ini hanya memanggil salah satu kondisi yang ada di dalam if
    // ! = not ini hanya memanggil kondisi yang tidak ada di dalam if

    if ($laki == 'reyhan' || $perempuan == 'perempuan') {
        echo 'benar';
    } else {
        echo 'salah';
    }

    echo "<br/>";

    // operator aritmatika
    // +, -, *, /, %
    // contoh operator aritmatika
    $a = 10;
    $b = 5;

    // Penjumlahan
    echo $a + $b."<br/>";

    // Pengurangan
    echo $a - $b."<br/>";

    // Perkalian
    echo $a * $b."<br/>";

    // Pembagian
    echo $a / $b."<br/>";

    // Sisa Bagi
    echo $a % $b."<br/>";


?>

 <form method="get" action="belajar3.php">
        <label>Nama</label>
        <input type="text" name="nama">
        <br/>
        <label>Umur</label>
        <input type="text" name="umur">
        <br/>
        <button type="submit">Kirim</button>
    </form>

<?php

    // mengambil data dengan form handling GET
    $nama = isset($_GET['nama']);
    $umur = isset($_GET['umur']);

    // Tampilkan hasil 
    echo 'Nama Saya : '.$nama;
    echo 'Umur Saya : '.$umur;
?>    