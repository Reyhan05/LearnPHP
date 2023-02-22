<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
     <!-- Buat fungsi ke halaman data admin -->
     <a href="halaman_admin.php">Kembali</a>

     <!-- form untuk mengisi data -->
     <form method="post">
        <table width="25%" border="0">
            <tr>
                <td>Nik</td>
                <td><input type="number" name="nik"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="number" name="kelas"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <select name="jurusan">
                        <option selected disabled>-- Pilih Jurusan --</option>
                        <option value="RPL">RPL</option>
                        <option value="TKJ">TKJ</option>
                        <option value="DMM">DMM</option>
                    </select>    
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="submit">KIRIM</button>
                </td>
            </tr>
        </table>
     </form>
     <?php
    require_once 'koneksi.php';
    //untuk mengirim data ke table users
    if (isset($_POST['submit'])){
       $nik = strip_tags($_POST['nik']);
       $nama = strip_tags($_POST['nama']);
       $kelas = strip_tags($_POST['kelas']);
       $jurusan = strip_tags($_POST['jurusan']);
       $alamat = strip_tags($_POST['alamat']);

       //untuk membuat sebuah nilai random
       $ran = rand();

       // untuk menampung ekstensi / format yang boleh di upload
       $ekstensi = ['png','jpg','jpeg','svg'];

       // menampung request file    
       $namafile = $_FILES['foto']['name'];

       // menampung request ukuran file
       $ukuran = $_FILES['foto']['size'];

       //untuk mengambil format ekstensi file
       $ext = pathinfo($namafile, PATHINFO_EXTENSION);

      //membuat sebuah validasi
       if (empty($nik) || empty($nama) || empty($kelas) || empty($jurusan) || empty($alamat)) {
         echo "<script>alert('Data tidak boleh kosong !');</script>";
         //jika data yang dimasukkan lebih dari 1 atau ada persamaan request
       } elseif (count((array) $connect->query('select nik from siswa where nik = "'.$nik.'"')->fetch_array()) > 1){
        echo '<script>alert("Nik sudah ada !");</script>';
        //input data ke database
       } else {
        // jika data ekstensi yang di tentuin tidak sesuai dengan ekstensi yang ada di file tersebut
        if (!in_array($ext, $ekstensi)) {
            echo '<script>
                    alert("format file tidak sesuai !"); 
                  </script>';
        } else {
            if ($ukuran < 1044070) {
                $xx = $ran.'_'.$namafile;
                //untuk menampung file ke dalam folder yang di tuju
                move_uploaded_file($_FILES['foto']['tmp_name'], 'img/'.$ran.'_'.$namafile);
                //query untuk menyimpan data di database
                $connect->query("insert into siswa(nik,nama,foto,kelas,jurusan,alamat) values ('$nik','$nama','$xx','$kelas','$jurusan','$alamat')");
                echo '<script>
                        alert("Data berhasil ditambahkan !");
                        window.location.href = "halaman_admin.php";  
                      </script>';
            } else {
                echo '<script>
                        alert(" gagal Maning !");  
                      </script>';
            }
        }
    }
    }
?>
</body>
</html>