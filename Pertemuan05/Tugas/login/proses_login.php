<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if ($email === 'admin@gmail.com' && $password === 'admin') {
        // jika benar maka
        header("location:../index.php");
    } else {
        header("location:login.php");
    } 

} else {
    echo "Cari Apa Hayooo......!";
}
