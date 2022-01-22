<?php 
include 'conn.php';
$selectAll = "SELECT * FROM snack1";
$result = mysqli_query($conn, $selectAll);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th {
            border: 2px solid black;
            border-collapse: collapse;
            text-align: center;
        }
        img {
            min-width: 100px;
            width: 5%;
        }
        td { min-width: 80px;}
    </style>
</head>

<body>
    <!-- Navigation bar -->
    <center>
    <div class="navbar" id="navigationBar">
        <a href="index.php" class="nyala">Homepage</a>
        <a href="login.html" class="login">Login</a>
    </div>
    </center>

    <!-- Logo utama -->
    <div class=" home">
    <center>
        <h2>Selamat Datang Admin</h2>
        <img id="home" src="/webpage/img/logo.png" alt="saraheyo.id">
    </center>
    </div>
        
    <!-- Daftar Snack -->
    <div class="snacks">
        <center><h2 id="snack">Snacks</h2></center>
        <table>
            <th> Tools </th>
            <th>ID</th>
            <th>Nama Snack</th>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Harga</th>
        <?php while( $row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td>
                    <a href="edit.php?id=<?= $row["id"];?>">ubah</a>
                    <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda yakin menghapus baris ini?');">hapus</a>
                </td>
                <td><?= $row["id"];?></td>
                <td><?= $row["snack"];?></td>
                <td><img class="snack_img" src="<?= $row["img"];?>" alt="<?=$row["snack"];?>"></td>
                <td><p><?= $row["sdesc"];?></p></td>
                <td><?= $row["price"];?></td>
            </tr>
        <?php endwhile; ?>
        <tr>
            <td><a href="tambah.php"><h4>tambah</h4></a></td>
            <td colspan="5"></td>
        </tr>
        </table>
    </div>
    <div class="hapus"></div>
</body>
</html>