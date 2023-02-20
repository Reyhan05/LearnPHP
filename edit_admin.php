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
    // fungsi edit data
    
    ?>
    
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
                    <button type="submit" name="update">Update</button>
                </td>
            </tr>
        </table>
     </form>
</body>
</html>