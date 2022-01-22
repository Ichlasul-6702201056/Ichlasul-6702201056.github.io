<?php 
include 'conn.php';
$selectAll = "SELECT * FROM snack1";
$result = mysqli_query($conn, $selectAll);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saraheyo.id</title>
    <link rel="stylesheet" href="style.css">
    <!-- <style>
            * { box-sizing: grid; }
            body {margin: 0;}   
            .navbar {
                background-color: #fce484;
                overflow: hidden;
                min-width: 100%;
                position:fixed;
            }
            .navbar a{
                float: left;
                display: block;
                color: black;
                text-align: center; 
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }
            .navbar a:last-child {display: none;}
            .home {
                padding: 50px 0 0 0;
                width: 100%;
                text-align: center;
            }
            h2 {
                font: 30px verdana;
                text-align: center;
                text-decoration: underline;
                margin: 50px 0 30px 0;
            }
            .clear {
                clear: both;
            }
            .snack {
                float: left;
                width: 80%;
            }
            .footer {
                background-color: rgb(242, 210, 32);
                text-align: center;
                padding: 10px;
                margin: 10px 0 0 0;
            }
            .footer h3 {
                font-family: segoe ui;
            }
            .footer ul {
                padding: 0;
                margin: 15px 0 0 0;
                height: 100px;
                list-style: none;
            }
            .footer ul li {
                padding: 10px;
            }
            .footer ul li a {
                color: darkblue;
                text-decoration: none;
            }
            .footer img {
                width: 15px;
                height: auto;
                margin: 0 5px 0 0;
            }
            table {
                width: 100%;
            }
            .snack_img {
                width: 100%;
            }
            table {
                border-collapse: collapse;
                background-color: #fcfc88;
            }
            td:not(:last-child), th, tr {
                padding: 15px;
                text-align: left;
                border: 1px solid darkgrey ;
            }
            .col-5 {
                font-weight: bold;
            }   
            table tr td#msg {
                text-align: center;
                font-family: verdana;
            }
            table tr td img#gofood, table tr td#msg {
                width: 300px;
                border: none;
            }
            .order {
                margin: 15px 0;
                box-shadow: 0px 10px 5px #888, 0px -10px 5px #888;
            }
            .order table tr {
                background-color: whitesmoke;
                border: none;
                box-shadow: 0 5px darkslategrey;
            }

            /* Handphone */
            @media only screen and (max-width: 768px) {
            .navbar a:not(:first-child) {display: none;}
            .navbar a:last-child {
                display: block;
                position: absolute;
                background-image: url(/webpage/img/ic_more.webp);    right: 0;
                top: 10px;
            }
            .navbar.res a {
                float: none;    
                display: block;
            }
            .card {
                display: table;
                background-color: #fce484;
                width: 100%;
            }
            .card p {
                padding: 0 30px;
                text-align: justify;
                background-color: #fce484;
                line-height: 1.8;
            }   
            .card h3 {
                background-color: pink;
                display: inline-block;
                font: bold 16px 'segoe ui';
                padding: 10px;
                width: 68%;
            }
            h2 {
                margin: 30px auto;
            }
            h4 {
                font: arial;
                padding: 0 15px;
                margin: 0;
            }
            .snack a:not(:first-child) {
                display: none;
            }
            .col-1,.col-4,.col-6 {display: none;}
            table tr td#order {
                text-align: center;
            }





            @media only screen and (min-width: 481px) and (max-width: 767px) {
                .col-1,.col-4 {display: table-cell;}
            }

            td,th {
                border: none;
                padding: 10px;
                text-align: justify;
            }
            td p {padding: 15px;}
            tr {
                border-collapse: collapse;
                border: 1px solid darkgrey
            }
            }


            /* Tablet - Laptop */
            @media only screen and (min-width: 769px) {
                .card {
                    display: table;
                    float: left;
                    max-width: 25%;
                    height: 300px;
                    background-color: #fce484;
                    padding: 15px;
                    overflow: auto;
                    box-shadow: 5px 10px #808080;
                }
                .card:nth-child(2) {
                    margin: 0 0 0 5%;
                }
                .card:nth-child(3) {
                    background-color: pink;
                    margin: 0 2.5%;
                }
                .card:nth-child(4) {
                    margin: 0;
                }
                .card p, table p {
                    line-height: 1.8;
                }
                .card h3, .snack_panel h3 {
                    background-color: pink;
                    display: inline-block;
                    font: bold 16px 'segoe ui';
                    padding: 10px;
                    width: 100%;
                }
                .card.middle h3 {
                    background-color: #fce484;
                }
                .col-6 {display: table-cell;}
            /* Effects */

            }
    </style> -->

</head>

<body>
    <!-- Navigation bar -->
    <div class="navbar" id="navigationBar">
        <a href="#home" class="nyala">Home</a>
        <a href="#about">Tentang</a>
        <a href="#snack">Snack</a>
        <a href="#contact">Contact</a>
        <a href="login.html" class="login">Login</a>
        <a href="javascript:void(0);" class="icon" onclick="navbar()"></a>
    </div>
    <!-- Logo utama -->
    <div class=" home">
        <img id="home" src="img/logo.png" alt="saraheyo.id">
    </div>
    <!-- Bagian tentang -->
    <div class="content-1">
        <h2 id="about">About</h2>
        <div class="card">
            <h3>Apa itu Saraheyo.id ?</h3>
            <p>Saraheyo.id adalah nama dari sebuah UMKM dengan produk jajanan yang lezat dan bergizi. Kami dengan bangga
                mempersembahkan hidangan untuk memuaskan lidah dan perut kawan-kawan sekalian.</p>
        </div>
        <div class="card middle">
            <h3>Ada apa di Saraheyo.id ?</h3>
            <p>Di Saranheyo.id kamu bisa menemukan jajanan yang lezat dan bergizi. Jajanan apa aja tuh? cus cek di
                bawah!</p>
        </div>
        <div class="card">
            <h3>Cara pesennya gimana nih ?</h3>
            <p>Eits! tenang, kamu bisa pesen jajanan ini dengan mudah. Caranya order via whatsapp kami atau kalau perut
                udah ga tahan, bisa lewat gofood. Dengan syarat apabila kita masih dekat namun terpisah jarak ya kan?
                hiks.</p>
        </div>
    </div>
        <div class="clear"></div>
        
    <!-- Daftar Snack -->
    <div class="snacks">
        <h2 id="snack">Snacks</h2>
        <table>
            <th class="col-1">No.</th>
            <th class="col-2">Nama Snack</th>
            <th class="col-3">Gambar</th>
            <th class="col-4">Deskripsi</th>
            <th class="col-5">Harga</th>
        <?php while( $row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td class="col-1"><?= $row["id"];?></td>
                <td class="col-2"><?= $row["snack"];?></td>
                <td class="col-3"><img class="snack_img" src="<?= $row["img"];?>" alt="<?=$row["snack"];?>"></td>
                <td class="col-4"><p><?= $row["sdesc"];?></p></td>
                <td class="col-5"><?= $row["price"];?></td>
            </tr>
        <?php endwhile; ?>
        </table>
    </div>

    <!-- Bagian Order -->
    <div class="order">
        <table>
        <tr>
            <td class="col-6" colspan="3" id="msg"><label for="order">Bisa langsung <a href="https://gofood.link/a/BXd1ks5">dipesen</a> guys!</label></td>
            <td  id="order" colspan="2"><a href="https://gofood.link/a/BXd1ks5"><img id="gofood" src="../img/gofood.png" alt="go_food"></a></td>
        </tr>
        </table>
    </div>

    <!-- Footer -->
    <div class="footer">
        <h3 id="contact">Contact</h3>
        <div class="footer_contact">
        <img src="img/wa_icon.png" alt=""><a href="">Whatsapp</a>
        <br>
        <img src="img/ig_icon.png" alt=""><a href="">Instagram</a>
    </div>
    
        <script src="function.js"></script>
</body>

</html>