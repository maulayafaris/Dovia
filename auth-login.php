<?php 
// Mengaktifkan session php
session_start();

include "connect.php"; // menghubungkan file connect.php yang menghubungkan ke database

$user_email = $_POST['email'];
$user_pass = $_POST['password'];

// Menyeleksi data admin dengan email atau no telp dan password
$data = mysqli_query($connect, "select * from user_data where email = '$user_email' or no_telp = '$user_email' and password = '$user_pass'");

// menghitung jumlah data yang ditemukan 
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['email'] = $user_email;
    $_SESSION['password'] = $user_pass;
    $_SESSION['status'] = "login";
    header("location:index.php");
}else{
    header("location:login.php?pesan=gagal");
}
?>