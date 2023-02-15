<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
</head>
<body>
    <!-- <h1>Anda berhasil masuk</h1> -->
    <?php
        // untuk menjalankan session
        session_start();

        // validasi jikalau login tidak di isi
        if (!$_SESSION['nama']){            
            header('location: login.php');
        }
    ?>
    <h2>Selamat Datang <?php echo $_SESSION['nama']; ?></h2>
    <h3>Email Anda <?php echo $_SESSION['email']; ?></h3>
    <h3>Username Lo <?php echo $_SESSION['username']; ?></h3>

    <a href="logout.php">Logout</a>
</body>
</html>