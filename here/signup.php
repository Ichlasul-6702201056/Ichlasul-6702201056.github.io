<?php

include 'conn.php';
include 'function.php';

if(isset($_POST['submit'])){

    
// mengambil nilai dari yang di input di form signup
$nama = $_POST['nama'];
$telp = $_POST['telp'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username='$username'";

if($username == $result){
    echo "Username sudah dipakai";
} else {
    // perintah untuk mendapatkan user dari db berdasarkan nama yang di input di form login
    $get_user = "INSERT INTO user (nama, username, passw, telp, email) VALUES('$nama', '$username', '$password', '$telp', '$email')";
    $result = mysqli_query($conn, $get_user);
    if($result){
        Header("Location: login.html");
    } else {Header("Location: signup.php");}
}
}

?>
