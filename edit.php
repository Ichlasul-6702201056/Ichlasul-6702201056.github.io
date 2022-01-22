<?php
include 'conn.php';

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $snack = $_POST['snack'];
    $img = $_POST['img'];
    $sdesc = $_POST['sdesc'];
    $price = $_POST['price'];
    $query = "UPDATE snack1 SET snack='$snack', img='$img', sdesc='$sdesc', price='$price'  WHERE id='$id'";
    mysqli_query($conn, $query);

    echo '
    <script>
    alert("data berhasil diubah");
    winow.location.href = "here.php";
    </script>
    ';
}

// ambil data
$id = $_GET['id'];
$selectAll = "SELECT * FROM snack1 WHERE id=$id";
$result = mysqli_query($conn, $selectAll);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah</title>
</head>
<body>
    <center><h2>Ubah Tabel</h2>
    <form action="" method="POST">
    <table>
    <tr>
        <td><label for="snack">Nama Snack</label></td>
        <td><input type="text" id="snack" name="snack" require value="<?= $row["snack"]?>"></td>
    </tr>
    <tr>
        <td><label for="img">Gambar (link)</label></td>
        <td><input type="text" id="img" name="img" require value="<?= $row["img"]?>"></td>
    </tr>
    <tr>
        <td><label for="sdesc">Deskriptsi Snack</label></td>
        <td><textarea type="text" id="sdesc" name="sdesc" require style="width:250px; height:200px;"><?= $row["sdesc"]?></textarea><td>
    </tr>
    <tr>
        <td><label for="price">Harga /porsi</label></td>
        <td><input type="text" id="price" name="price" require value="<?= $row["price"]?>"></td>
    </tr>
    <td colspan="2"><input type="submit" value="ubah data" name="submit"></td>
    </table>
    </form>
    </center>
    <center><a href="here.php"><h4>Kembali ke tabel</h4></a></center>

</body>
</html>