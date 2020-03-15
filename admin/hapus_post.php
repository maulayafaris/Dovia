<?php
include "../connect.php";

session_start();

if (!$_SESSION['login']) {
    header('location:login.php');
}

$id = $_GET['id'];

$query = mysqli_query($connect, "DELETE FROM post WHERE id_post = '$id'");

if ($query) {
    header('location:list_post.php');
}
?>