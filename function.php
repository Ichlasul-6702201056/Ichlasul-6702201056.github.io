<?php
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// deklrasi variabel
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
}
else if(isset($_POST['reset'])){
    header("location: registrasi.php");
}

// cek kolom kosong pada form signup
function kosong (){
    $nama = $GLOBALS['nama'];
    $telp = $GLOBALS['nim'];
    $email = $GLOBALS['username'];
    $username = $GLOBALS['username'];
    $password1 = $GLOBALS['pas1'];
    $password2 = $GLOBALS['pas2'];

    if(!isset($nama)){echo "Anda belum memasukkan nama <br>";}
    if(!isset($telp)){echo "Anda belum memasukkan nim <br>";}
    if(!isset($email)){echo "Anda belum memasukkan nim <br>";}
    if(!isset($username)){echo "Anda belum memasukkan username <br>";}
    if(!isset($password1)){echo "Anda belum memasukkan password <br>";}
    if(!isset($password2)){echo "Anda belum mengulang password <br>";}
}

// validasi form signup
function isi_benar() {
    $nama = $GLOBALS['nama'];
    $telp = $GLOBALS['telp'];
    $username = $GLOBALS['username'];
    $password1 = $GLOBALS['pas1'];
    $password2 = $GLOBALS['pas2'];

    if(!ctype_alpha($nama)){
        echo "Nama hanya boleh berisi huruf <br>";
    }
    
    if(!is_numeric($telp)){
        echo "No. Telp hanya boleh terdiri dari angka <br>";
    }

    if(!strlen($username) <= 6 && !strlen($username) >= 15) {
        echo "Username minimal 6 karakter dan maksimal 15 karakter <br>";
    }

    if(!($password1 == $password2)){
        echo "Password tidak sesuai <br>"; 
    }

}

?>