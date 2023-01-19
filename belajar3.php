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
    for ($i=1; $i <= 21; $i++) {
        if ($i % 2 == 0) {
            echo "ganjil <br/>$i";
        } else {
            echo "genap <br/>$i";
        }
    }


?>