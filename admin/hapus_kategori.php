<?php

include "../connect.php";

session_start();

if (!$_SESSION['login']) {
    header('location:login.php');
}

$id = $_GET['id'];

$query = mysqli_query($connect, "DELETE FROM kategori WHERE id_kategori = '$id'");

if ($query) {
    header('location:list_kategori.php');
}