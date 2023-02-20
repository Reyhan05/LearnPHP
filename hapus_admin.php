<?php
    // fungsi delete data
    include "koneksi.php";

    // memanggil parameter id yang akan dihapus
    $id = $_GET['id'];

    // membuat query untuk menghapus data berdasarkan parameter id
    $result = mysqli($connect, "DELETE FROM student WHERE id='$id'");

    // mengecek apakah query berhasil di eksekusi
    if ($result){
        echo '<script>
              alert("Data berhasil di hapus !");
              </script>';
    } else {
        echo '<script>
              alert(" gagal Maning !");  
              </script>';
    }
?>