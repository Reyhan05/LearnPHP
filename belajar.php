<?php
    // Metode looping ada 4
    // 1. for
    // 2. while
    // 3. do while
    // 4. foreach

    // for
    for ($i=100; $i >= 1; $i--) {
        echo "<br/>$i";
    }

    echo "<br/>";

    // latihan for
    // for ($i=1; $i <= 100; $i++) {
    //     if ($i % 2 == 0) {
    //         echo "<br/>$i";
    //     }
    // }

    echo "<br/>";

    // while
    $awal = 1;
    // 1 kondisi awal
    while ($awal <= 50) {
        // tambahkan hasil kondisinya
        echo $awal++;
        echo "<br/>";
    }

    echo "<br/>";

    // do while patokan awal nilai 10
    $while = 10;
    do {
        echo $while--;
        echo "<br/>";
    } while ($while > 0);

    echo "<br/>";

    // foreach
//     $kendaraan = ["Mobil", "Motor", "Sepeda", "Pesawat"];

//     foreach ($kendaraan as $ken) {
//     echo "<table border='1' border: 1px solid black;>
//     <tr>
//         <td>$ken</td>
//         <td>$ken</td>
//         <td>$ken</td>
//         <td>$ken</td>
//     </tr>
// </table>";
//     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border= "1";>
<tr>
    <th>kendaraan</th>
</tr>
<tr>
    <?php
    $kendaraan = ["Mobil", "Motor", "Sepeda", "Pesawat"];
    
    foreach ($kendaraan as $ken) {
        echo "<tr>
            <td>$ken</td>
              </tr>";
        }

    ?>
</tr>

</table>
</body>
</html>