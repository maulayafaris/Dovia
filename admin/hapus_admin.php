<?php

include "../connect.php";

session_start();

if (!$_SESSION['login']) {
    header('location:login.php');
}

$id =  $_GET['id'];

$query = mysqli_query($connect, "DELETE FROM admin WHERE id_admin = '$id'");

if ($query) {
    header('location:list_admin.php');
}
?>