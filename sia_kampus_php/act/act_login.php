<?php 
$userBenar = "admin";
$passBenar = "admin123";

$userForm = $_POST['user'];
$passForm = $_POST['pass'];

session_start();
if( ($userForm == $userBenar) && ($passForm == $passBenar) ){
    $_SESSION['login'] = true;
    header("location:../index.php?page=home");
}else{

    if($userForm == ''){
        $_SESSION['user_kosong'] = "Username tidak boleh kosong";
    }

    if($passForm == ''){
        $_SESSION['pass_kosong'] = "Password tidak boleh kosong";
    }

    $_SESSION['error'] = "Username / Password salah !";
    header("location:../login.php");
}



