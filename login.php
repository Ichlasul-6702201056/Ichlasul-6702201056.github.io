<?php
include 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

if (($_POST['username']) == "" || ($_POST['password']) == "" ){
    header("location:login.html");
}

$query = "SELECT * FROM user WHERE username='$username'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result);
if($data){
    //cek username dan password
    if($password == $data['passw']){
        Header("Location:index.php"); //view.php
        if($username == "admin") {
            Header("Location:here.php");
        }
    } else {  
        echo "<script>
        alert('username atau password anda salah!');
        window.location.href='login.html';
        </script>";
    }
} else { 
    echo "<script>
    alert('username tidak terdaftar!');
    window.location.href='login.html';
    </script>";
}

?>