<?php
include 'conn.php';

if(isset($_POST['submit'])){
    // global $conn;
    $snack = $_POST['snack'];
    $img = $_POST['img'];
    $sdesc = $_POST['sdesc'];
    $price = $_POST['price'];
    $query = "INSERT INTO snack1 (id, snack, img, sdesc, price) VALUES ('', '$snack', '$img', '$sdesc', '$price')";
    mysqli_query($conn, $query);

    // return mysqli_affected_rows($conn);
    echo "
    <script>alert('data berhasil ditambahkan');</script>
    ";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman tambah</title>
</head>
<body>
    <center><h2>Tambah Produk</h2>
    <form action="" method="POST">
    <table>
    <tr>
        <td><label for="snack">Nama Snack</label></td>
        <td><input type="text" id="snack" name="snack" require></td>
    </tr>
    <tr>
        <td><label for="img">Gambar (link)</label></td>
        <td><input type="text" id="img" name="img" require></td>
    </tr>
    <tr>
        <td><label for="sdesc">Deskriptsi Snack</label></td>
        <td><textarea type="text" id="sdesc" name="sdesc" require style="width:250px; height:200px;"></textarea><td>
    </tr>
    <tr>
        <td><label for="price">Harga /porsi</label></td>
        <td><input type="text" id="price" name="price" require></td>
    </tr>
    <td colspan="2"><input type="submit" value="tambahkan" name="submit"></td>
    </table>
    </form>
    </center>
    <center><a href="here.php"><h4>Kembali ke tabel</h4></a></center>
    
</body>
</html>