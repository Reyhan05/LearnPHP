<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit & Update admin</title>
</head>
<body>

<?php
        include('koneksi.php');        
        //fungsi edit data
        //memanggil parameter id yang akan diedit
        $id = $_GET['id'];

        //membuat query untuk mengedit data berdasarkan parameter id
        $result = mysqli_query($connect , "select * from student where id = $id");

        //membuat loopingan object berdasarkan parameter id
        while($edit = mysqli_fetch_array($result)) {
            $nik = $edit['nik'];
            $nama = $edit['nama'];
            $foto = $edit['foto'];
            $kelas = $edit['kelas'];
            $jurusan = $edit['jurusan'];
            $alamat = $edit['alamat'];
        }

        //fungsi update data
        //jikalau tombol update di klik
        if (isset($_POST['update'])){
            //memanggil seluruh column yang akan di update
            $id = $_POST['id'];
            $nik = $_POST['nik'];
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $jurusan = $_POST['jurusan'];
            $alamat = $_POST['alamat'];

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
                        //jikalau ada fotonya maka sekalian dihapus beserta file yang ada difoldernya
                        if (is_file("img/".$foto)){
                            //fungsi hapus file di folder
                            unlink("img/".$foto); 
                        }
                        //untuk menampung file ke dalam folder yang di tuju
                        move_uploaded_file($_FILES['foto']['tmp_name'], 'img/'.$ran.'_'.$namafile);
                        //query untuk menyimpan data di database
                        $connect->query("update student set nik='$nik', nama='$nama', foto='$xx', kelas='$kelas', jurusan='$jurusan', alamat='$alamat' where id='$id'");
                        echo '<script>
                                alert("Data berhasil diupdate !");
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
    
    <form method="post" enctype="multipart/form-data">
        <table width="25%" border="0">
            <tr>
                <td>Nik</td>
                <td><input type="number" name="nik" value=<?php echo $nik;?>>></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>>></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>
                    <!-- untuk menampilkan foto yang di upload -->
                    <img src="img/<?php echo $foto;?>" style="width:120px; float:left; margin-bottom:5px;"/>

                    <!-- untuk menginput foto yang di update -->
                    <input type="file" name="foto"/>
                    <!-- untuk label catatan -->
                    <i style="float:left; font-size:11px; color:red;">Abaikan jika tidak berubah foto</i>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="number" name="kelas" value=<?php echo $kelas;?>></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <select name="jurusan">
                        <option selected disabled>-- Pilih Jurusan --</option>
                        <option <?php if ($jurusan == 'RPL') {echo 'selected';} ?> value="RPL">RPL</option>
                        <option <?php if ($jurusan == 'TKJ') {echo 'selected';} ?> value="TKJ">TKJ</option>
                        <option <?php if ($jurusan == 'DMM') {echo 'selected';} ?> value="DMM">DMM</option>
                    </select>    
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" rows="5"><?php echo $alamat;?></textarea>
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><button type="submit" name="update">Update</button></td>            
            </tr>
        </table>
     </form>
</body>
</html>