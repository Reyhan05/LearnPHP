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

    if ($laki == 'reyhan' || $perempuan == 'perempuan') {
        echo 'benar';
    } else {
        echo 'salah';
    }

?>