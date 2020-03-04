<?php
$connect = mysqli_connect(
            "localhost", //Host
            "root", // User Mysql
            "", // Password Mysql
            "dovia" // Database
            );

if (mysqli_connect_errno()) {
    echo "Koneksi ke database gagal: ". mysqli_connect_error();
}
?>