<?php
session_start();
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "logout") {
        echo "<script>alert('Anda berhasil logout')</script>";
    }
}
?>
<!-- Mie Style -->
<link rel="stylesheet" href="./resources/css/univstyle.css">


<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="papanbox-navbar">
    <a class="navbar-brand ml-3 " href="index.php"><img src="https://res.cloudinary.com/dw5hlq8f7/image/upload/v1582817859/logov2_nw2od7.png" width="180" height="50" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" id="menu-nav" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="menu-nav" href="#">YT</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" id="menu-nav" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="menu-nav" href="#">About</a>
            </li>
            <?php
            if (!$_SESSION or $_SESSION['status'] == '') { 
            ?>
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-1">
                        <a href="login.php"><button class="btn btn-warning" style="color:white;font-weight:bold;margin-left:2.5px;" type="button">Login</button></a>
                    </form>
                </li>
            <?php } 
            else if($_SESSION['status'] == "login"){
            ?>
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-1">
                        <a href="logout.php"><button class="btn btn-warning" style="color:white;font-weight:bold;margin-left:2.5px;" type="button">Logout</button></a>
                    </form>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>
<!-- Navbar End -->