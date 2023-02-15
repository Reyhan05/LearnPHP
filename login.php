<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
   // memanggil config database
   include 'koneksi.php';

   // menambahkan error reporting
   error_reporting(0);

   // membuat session
    session_start();

    // membuat sebuah validasi login jikalau sesi nama ada, bisa login
    // if (isset($_SESSION['nama'])){
    //     header('location: halaman1.php');
    // }

    // membuat sebuah validasi mencocokan email password di database
    if (isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        
        $query = "select * from users where email = '$email' and password = '$password'";
        $hasil = mysqli_query($connect, $query);
        if ($hasil->num_rows > 0){
            $baris = mysqli_fetch_assoc($hasil);
            $_SESSION['nama'] = $baris['nama'];
            $_SESSION['email'] = $baris['email'];
            $_SESSION['username'] = $baris['username'];
            header('location: halaman1.php');
            // jikalau data login tidak ada / gagal
        } else {
            echo '<script>alert("Email atau Password Salah !!!")</script>';
        }
    }


    ?>
    <!-- method post untuk mengirim data -->
    <form method="post">
        <input type="email" name="email" placeholder="Masukan Email.."/>
        <br/>
        <input type="password" name="password" placeholder="Masukan Password.."/>
        <br/>
        <button type="submit" name="submit">Login</button>
    </form> 
</body>
</html>