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

 <form method="post" action="belajar3.php">
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
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];

    // Tampilkan hasil 
    echo 'Nama Saya : '.$nama;
    echo 'Umur Saya : '.$umur;

    echo "<br/>";

    // array
    $kendaraan = ['Mobil', 'Motor', 'Sepeda', 'Pesawat'];

    // tampilkan array
    echo $kendaraan[1];

    echo "<br/>";

    // array asosiatif
    $kendaraan = [
        'Mobil' => 'Toyota',
        'Motor' => 'Honda',
        'Sepeda' => 'Polygon',
        'Pesawat' => 'Lion Air'
    ];

    // tampilkan array asosiatif
    echo $kendaraan['Mobil'];

    echo "<br/>";

    // array multidimensi
    $kendaraan = [
        'Mobil' => [
            'Toyota' => 'Avanza',
            'Honda' => 'Jazz',
            'Suzuki' => 'Ertiga'
        ],
        'Motor' => [
            'Honda' => 'Beat',
            'Yamaha' => 'Mio',
            'Suzuki' => 'Satria'
        ],
        'Sepeda' => [
            'Polygon' => 'Xtrada',
            'Wimcycle' => 'Xtrada',
            'Polygon' => 'Xtrada'
        ],
        'Pesawat' => [
            'Lion Air' => 'Boeing',
            'Garuda' => 'Boeing',
            'Citilink' => 'Boeing'
        ]
    ];

    // tampilkan array multidimensi
    echo $kendaraan['Mobil']['Toyota'];
    echo "<br/>";
    echo $kendaraan['Pesawat']['Garuda'];

    echo "<br/>";

    // latihan array multidimensi
    $handphone = [
        'apple' => [
            '12' => ['pro max', 'pro']
        ],
        'samsung' => [
            'note',
            'galaxy' => ['ultra', 's17', 'max'],
            'tablet',
            'laptop'
        ],
        'xiaomi' => ['note 10 pro', 'note 10', 'note 30 pro']
    ];

    echo $handphone['apple']['12'][0];
    echo "<br/>";
    echo $handphone['samsung']['galaxy'][1];
    echo "<br/>";
    echo $handphone['xiaomi'][2];

?>    