<?php 
// Mengaktifkan session php
session_start();

include "../connect.php"; // menghubungkan file connect.php yang menghubungkan ke database

$user_email = $_POST['email'];
$user_pass =  MD5($_POST['password']);

// Menyeleksi data admin dengan email atau no telp dan password
$data = mysqli_query($connect, "select * from admin where user_admin = '$user_email' and pass_admin = '$user_pass'");

// menghitung jumlah data yang ditemukan 
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['user_admin'] = $user_email;
    $_SESSION['user_pass'] = $user_pass;
    $_SESSION['status'] = "login";
    $_SESSION['login'] = true;
    header("location:index.php");
}else{
    header("location:login.php?pesan=gagal");
}
?>