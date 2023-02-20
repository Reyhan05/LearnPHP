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
        // fungsi update data
        if (isset($_POST['update'])){
            $id = $_POST['id'];
            $id = $_POST['nik'];
            $id = $_POST['nama'];
            $id = $_POST['kelas'];
            $id = $_POST['jurusan'];
            $id = $_POST['alamat'];

            // membuat query untuk update data
            $result = mysqli_query($connect, "UPDATE student SET nik='$nik', nama='$nama', kelas='$kelas', jurusan='$jurusan', alamat='$alamat' WHERE id='$id'");

            // kondisi jika berhasil di update
         if ($result){
            echo "<script>
              alert('Data berhasil di update !')
              window.location.href = 'halaman_admin.php'
              </script>";
        } else {
            // jika query gagal di eksekusi
            echo '<script>
              alert(" gagal Maning !")
              </script>';
              }
        }

        // memanggil parameter id yang akan di edit
        $id = $_GET['id'];

        // membuat query untuk mengedit data berdasarkan parameter id
        $result = mysqli_query($connect, "SELECT * FROM student WHERE id= $id");
        
        // membuat looping object berdasarkan parameter id
        while($edit = mysqli_fetch_array($result)){
            $nik = $edit['nik'];
            $nama = $edit['nama'];
            $kelas = $edit['kelas'];
            $jurusan = $edit['jurusan'];
            $alamat = $edit['alamat'];
        }
    ?>
    
    <form method="post">
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