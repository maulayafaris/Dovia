<?php

include "../connect.php";

session_start();

if (!$_SESSION['login']) {
    header('location:login.php');
}

$id = $_GET['id'];

if(isset($_POST['edit_post']) && $_POST['edit_post'] == "SIMPAN") {
    
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $isi = $_POST['isi'];
    $gambar = $_FILES['gambar']['name'];

    if (!empty($gambar)) {
        move_uploaded_file($_FILES['gambar']['tmp_name'], "../upload/".$gambar);
        $query = mysqli_query($connect, "UPDATE post set gambar_post = '$gambar' where id_post = '$id'");
    }
    $query = mysqli_query($connect, "UPDATE post set judul_post = '$judul', isi_post = '$isi', id_kategori='$kategori' where id_post='$id'");

    if ($query) {
        header('location:list_post.php');
    }
}

// berita
$query = mysqli_query($connect, "SELECT * FROM post where id_post='$id'");
$data = mysqli_fetch_assoc($query);

// kategori
$kategori = mysqli_query($connect, "SELECT * FROM kategori ORDER BY nama_kategori ASC");
$kat = mysqli_fetch_assoc($kategori);

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
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <h3>Judul :</h3>
        <input class="form-control" type="text" name="judul" value="<?=$data['judul_post'];?>">
    </div>
    <div class="form-group">
        <h3>Kategori</h3>
        <select name="kategori">
                <option value="">-- Pilih Kategori--</option>
                <?php do{ ?>
                    <option value="<?=$kat['id_kategori']; ?>" <?php if ($data['id_kategori'] == $kat['id_kategori']) {echo "selected";}?>>
                        <?=$kat['nama_kategori']; ?>
                    </option>
                <?php }while($kat = mysqli_fetch_assoc($kategori)); ?>
        </select>
    </div>
    <div class="form-group">
        <h3>Isi : </h3>
        <textarea class="form-control" name="isi" cols="30" rows="10"><?=$data['isi_post'];?></textarea>
    </div>
    <div class="form-group">
        <h3>Gambar : </h3>
        <input class="form-control-file" type="file" name="gambar">
    </div>

    <input class="btn btn-primary mb-2" type="submit" name="edit_post" value="SIMPAN">

</form>
</div>
</body>