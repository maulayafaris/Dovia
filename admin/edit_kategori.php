<?php

include "../connect.php";
session_start();
if (!$_SESSION['login']) {
    header('location:login.php');
}

$id = $_GET['id'];

if (isset($_POST['simpan_kategori']) && $_POST['simpan_kategori'] == "SIMPAN") {
    $nama = $_POST['nama'];

    $query = mysqli_query($connect, "UPDATE kategori SET nama_kategori = '$nama' WHERE id_kategori = '$id'");

    if ($query) {
        header('location:list_kategori.php');
    }
}

$query = mysqli_query($connect, "SELECT * FROM kategori WHERE id_kategori = '$id'");
$data = mysqli_fetch_assoc($query);
?>
<head>
    <title>Tambah Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            background-color: #f2f2f2;
        }
    </style>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<form action="" method="post">
<div class="form-group">
    <h3>Nama Kategori :</h3> 
    <input class="form-control" type="text" name="nama" value="<?=$data['nama_kategori'];?>"><br>
</div>
    <input class="btn btn-primary mb-2" type="submit" name="simpan_kategori" value="SIMPAN">
</form>