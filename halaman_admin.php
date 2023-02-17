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

    <!-- Buat fungsi ke halaman tambah data -->
    <a href="tambah_admin.php">Tambah Data</a>

    <!-- Buat table untuk menampun datanya-->
    <table width="100" border="1">
        <tr>
            <th>Nik</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <!-- Buat fungsi read data -->
        <?php
            $hasil = mysqli_query($connect, "select * FROM student ORDER BY id DESC");
            // me loop hasil query dari $hasil
            if ($hasil -> num_rows > 0){
            foreach ($hasil as $data) {
                    echo "<tr>
                    <td>".$data['nik']."</td>
                    <td>".$data['nama']."</td>
                    <td>".$data['kelas']."</td>
                    <td>".$data['jurusan']."</td>
                    <td>".$data['alamat']."</td>
                    <td>
                        <a href='edit_admin.php?id=".$data['id']."'>Edit</a> |
                        <a href='hapus_admin.php?id=".$data['id']."'>Hapus</a>
                    </td>
                </tr>";   
            }
                } else {
                    echo "<tr><td colspan='6'>Data Masih Kosong</td></tr>";
            }
        ?>
    </table>

</body>
</html>