<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <!-- <h1>Anda berhasil masuk</h1> -->
    <?php
        include('koneksi.php');
        // untuk menjalankan session
        session_start();

        // validasi jikalau login tidak di isi
        if (!$_SESSION['name']){           
            echo "<script>alert('anda harus login dulu')</script>"; 
            header('location: login_role.php');
        }
    ?>
    <h2>Selamat Datang <?php echo $_SESSION['name']; ?></h2>
    <h3>Email Anda <?php echo $_SESSION['email']; ?></h3>
    <br/>
    ini adalah halaman admin

    <a href="logout_role.php">Logout</a>

    <!-- Buat fungsi ke halaman tambah data -->
    <a href="tambah_admin.php">Tambah Data</a> 

    <form method="get">
        <!-- form input untuk mengisi data yang akan dicari -->
        <input type="text" name="search" placeholder="cari data..." value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>">
        <button type="submit">cari</button>
    </form>

    <!-- Buat table untuk menampun datanya-->
    <table width="100%" border="1">
        <tr>
            <th>Nik</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <!-- Buat fungsi read data -->
        <?php
        if(isset($_GET['search'])){
            $katacari = $_GET['search'];

            $query = "select * from student where nama like '%".$katacari."%' order by id desc";
            // jika tidak mendapatkan data yang dicari
        } else {
            $query = "select * from student order by id desc";
        }
        $hasils = mysqli_query($connect, $query);
            // ngelooping hasi query dari $hasil
            if($hasils->num_rows > 0){
                foreach($hasils as $hasil) {
                    if ($hasil['foto'] == null) {
                        echo "<tr>
                            <td>".$hasil['nik']."</td>
                            <td>".$hasil['nama']."</td>
                            <td>Sengaja ga aplot, udh ganteng</td>
                            <td>".$hasil['kelas']."</td>
                            <td>".$hasil['jurusan']."</td>
                            <td>".$hasil['alamat']."</td>
                            <td>
                                <a href='edit_admin.php?id=".$hasil['id']."'>Edit</a> | <a href='hapus_admin.php?id=".$hasil['id']."&&foto=".$hasil['foto']."'>hapus</a>
                            </td>
                          </tr>";   
                    } else {
                        echo "<tr>
                            <td>".$hasil['nik']."</td>
                            <td>".$hasil['nama']."</td>
                            <td><img src='img/".$hasil['foto']."' width='35' height='40'></td>  
                            <td>".$hasil['kelas']."</td>
                            <td>".$hasil['jurusan']."</td>
                            <td>".$hasil['alamat']."</td>
                            <td>
                                <a href='edit_admin.php?id=".$hasil['id']."'>Edit</a> | <a href='hapus_admin.php?id=".$hasil['id']."&&foto=".$hasil['foto']."'>hapus</a>
                            </td>
                          </tr>";
                    }
                }
            } else {
                echo "<tr>
                        <td colspan='6'>Data masih kosong !</td>
                    </tr>";
            }
            
        ?>
    </table>

</body>
</html>