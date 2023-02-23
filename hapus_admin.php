<?php
    // fungsi delete data
    include "koneksi.php";

    // memanggil parameter id yang akan dihapus
    $id = $_GET['id'];

    // memanggil parameter foto yang akan dihapus
    $foto = $_GET['foto'];

    // membuat query untuk menghapus data berdasarkan parameter id
    $result = mysqli_query($connect, "DELETE FROM student WHERE id='$id'");

    // disini untuk membuat query menjadi array
    $delete = mysqli_fetch_array($result);

    // jikalau ada fotonya maka sekalian di hapus serta file yang ada di foldernya
    if (is_file("img/".$delete['foto'])){

        // fungsi hapus php di folder
        unlink("img/".$delete['foto']);

        // membuat query hapus data
        mysqli_query($connect, "DELETE FROM student WHERE id='$id'");
        echo "<script>
              alert('Data berhasil di hapus !')
              window.location.href = 'halaman_admin.php'
              </script>";
        
        // jikalau tidak ada fotonya di folder maka data akan di hapus
    } else {
        $deleteTFolder = mysqli_query($connect, "DELETE FROM student WHERE id='$id'");
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
    }
?>