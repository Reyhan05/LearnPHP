<?php
    // fungsi delete data
    include "koneksi.php";

    // memanggil parameter id yang akan dihapus
    $id = $_GET['id'];

    // membuat query untuk menghapus data berdasarkan parameter id
    $result = mysqli_query($connect, "DELETE FROM student WHERE id='$id'");

    // mengecek apakah query berhasil di eksekusi
    if ($result){
        echo "<script>
              alert('Data berhasil di hapus !')
              window.location.href = 'halaman_admin.php'
              </script>";
    } else {
        // jika query gagal di eksekusi
        echo '<script>
              alert(" gagal Maning !")
              </script>';
    }
?>