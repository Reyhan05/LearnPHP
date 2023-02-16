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

    <a href="login_role.php">Logout</a>
</body>
</html>