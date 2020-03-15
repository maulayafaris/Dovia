<?php

include "../connect.php";

session_start();

if (!$_SESSION['login']) {
    header('location:login.php');
}

if (isset($_POST['tambah_post']) && $_POST['tambah_post'] == "TAMBAH") {
     $judul     = $_POST['judul'];
     $kategori  = $_POST['kategori'];
     $isi       = $_POST['isi'];
     $gambar    = $_FILES['gambar']['name'];

     move_uploaded_file($_FILES['gambar']['tmp_name'], "../upload/".$gambar);

     $query = mysqli_query($connect, "INSERT INTO post(judul_post, isi_post, id_kategori, gambar_post) VALUES('$judul', '$isi', '$kategori',  '$gambar')");

     if ($query) {
        header('location:list_post.php'); 
     }
}

$query = mysqli_query($connect, "SELECT * FROM kategori ORDER BY nama_kategori ASC");
$data = mysqli_fetch_assoc($query);
?>
<head>
    <title>Tambah Postingan</title>
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
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <h3>Judul : </h3>
        <input class="form-control" type="text" name="judul">
    </div>
    <div class="form-group">
        <h3>Kategori :</h3>
        <select class="form-control" name="kategori">
                    <option value=""> -- Pilih Kategori -- </option>
                    <?php do{ ?>
                        <option value="<?=$data['id_kategori'];?>"><?=$data['nama_kategori'];?></option>
                    <?php }while($data = mysqli_fetch_assoc($query));?>
        </select>
    </div>
    <div class="form-group">
        <h3>Isi Postingan :</h3>
        <textarea class="form-control" name="isi" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <h3>Pilih Gambar Thumbnail Post :</h3>
        <input class="form-control-file" type="file" name="gambar">
    </div>
    <input type="submit" name="tambah_post" value="TAMBAH" class="btn btn-primary mb-2">
</form>
</div>
</body>