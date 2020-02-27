<!Doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
<!-- Offline Bootstrap CSS -->
<link rel="stylesheet" href="resources/css/bootstrap.css"> 

<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- OFFLINE Javascript -->
<script src="resources/js/bootstrap.js"></script>
<script src="resources/js/jquery-3.3.1.slim.min.js"></script>
<script src="resources/js/popper.min.js"></script>
<!-- Mie Style -->
<style>
    @import url('https://www.fontify.me/wf/5cfc1e12b698845fbc0ee9ac1b686dfd');

    @font-face {
            font-family: "sf-pro-rounded";
            src: url("resources/font/sf-pro-rounded.ttf") format("truetype");
        }

    body{
        background-color:#F8F8F8;
    }

    #menu-nav{
        /* color: white; */
        font-family: font61345;
        font-size: 20px;
    }
    
    #papankata{
        font-family: "sf-pro-rounded";
        font-weight: bold;
        text-align: center;
        font-size: 50px;
        color:white;
    }

    #papanbox{
        background-image: url("https://res.cloudinary.com/dw5hlq8f7/image/upload/v1582818300/papanboxbg_y8zhzq.jpg");
        background-color: skyblue;
    }

</style>
</head>
<body>
<!-- File yang sudah mencoba menggunakan cloudinary.com -->
<nav class="navbar navbar-expand-md navbar-dark " id="papanbox">
    <a class="navbar-brand ml-3 " href="index.php"><img src="https://res.cloudinary.com/dw5hlq8f7/image/upload/v1582817859/logov2_nw2od7.png" width="180" height="50" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" id="menu-nav" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="menu-nav" href="#">YT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="menu-nav" href="#">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="menu-nav" href="#">About</a>
            </li>
            <li class="nav-item">
            <form class="form-inline my-2 my-lg-1">
                <button class="btn btn-warning" style="color:white;font-weight:bold;margin-left:2.5px;" type="button">Login</button>
            </form>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid" id="papanbox">
    <p id="papankata">BELAJAR BAHASA INGGRIS LEBIH MUDAH</p>
    <p id="papankata">DI</p><img height="100" width="250"  style="display: block; margin: auto;" src="https://res.cloudinary.com/dw5hlq8f7/image/upload/v1582817859/logov2_nw2od7.png"><br/>
    <a href="#"><button  class="btn-lg btn-outline-primary"  style="display: block; margin: auto; background: transparent; color: white;border-width: 2.5px;border-color:white;">MULAI BELAJAR</button></a><br/><br/>
</div>

<div class="container-fluid row">
<!-- Selain flex, bisa pakai col-md-4 juga -->
    <div class="col-md-4">
        <p>Punya Pertanyaan?</p>
        <a href="#"><button>Klik Disini</button></a>
    </div>
    <div class="col-md-4 ml-1">
        <p>Butuh Kursus?</p>
        <a href="#"><button>Klik Disini</button></a>
    </div>
    <div class="col-md-3">
        <p>Kontak Kami</p>
        <a href="#"><button>Klik Disini</button></a>
    </div>
</div>

<div class="second-big-box">
    <img src="https://res.cloudinary.com/dw5hlq8f7/image/upload/v1582818179/seminar_shspac.png"/>
    <p>Seminar dan Pelatihan</p>
    <p>Kami sudah mengadakan seminar dan pelatihan di berbagai  universitas-universitas di Indonesia diantaranya : 
    IU, UBT, UMG, ATIKOM, UJN, BU, UMN, dll dan juga di beberapa perusahaan seperti : PT. Subur Mandiri, PT. Tekom, 
    PT. Karya Jaya, PT. Endosa, dll
    </p> 
</div>

<div class="thrid-big-box">
    <p>Pendapat Mereka tentang Kami</p>
    
    <button id="buttonleft"></button>
    
    <div class="pendapat">
        <img src="https://res.cloudinary.com/dw5hlq8f7/image/upload/v1582818227/people_ocdxa9.png"/>
        <p>Nama Lengkap</p>
        <p>"Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt 
        ut labore et dolore magna aliqua."
        </p>
    </div>
    <div class="pendapat">
        <img src="https://res.cloudinary.com/dw5hlq8f7/image/upload/v1582818227/people_ocdxa9.png"/>
        <p>Nama Lengkap</p>
        <p>"Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt 
        ut labore et dolore magna aliqua."
        </p>
    </div>
    <div class="pendapat">
        <img src="https://res.cloudinary.com/dw5hlq8f7/image/upload/v1582818227/people_ocdxa9.png"/>
        <p>Nama Lengkap</p>
        <p>"Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt 
        ut labore et dolore magna aliqua."
        </p>
    </div>

    <button id="buttonright"></button>
</div>

<div class="foot">
    <div class="foot-menu">
        <div class="first-foot-menu">
            <p>Ex:Menu Foot Title</p>
            <p>Ex:Submenu title1</p>
            <p>Ex:Submenu title2</p>
            <p>Ex:Submenu title3</p>
            <p>Ex:Submenu title4</p>
        </div>
        <div class="second-foot-menu">
            <p>Ex:Menu Foot Title</p>
            <p>Ex:Submenu title1</p>
            <p>Ex:Submenu title2</p>
            <p>Ex:Submenu title3</p>
            <p>Ex:Submenu title4</p>
        </div>
        <div class="third-foot-menu">
            <p>Ex:Menu Foot Title</p>
            <p>Ex:Submenu title1</p>
            <p>Ex:Submenu title2</p>
            <p>Ex:Submenu title3</p>
            <p>Ex:Submenu title4</p>
        </div>
        <div class="foot-menu">
            <p>Mobile App</p>
            <a href=""><img src="https://res.cloudinary.com/dw5hlq8f7/image/upload/v1582818246/gplay_hq2aje.png"/></a><br/>
            <a href=""><img src="https://res.cloudinary.com/dw5hlq8f7/image/upload/v1582818245/appstore_xrs27j.png"/></a>
        </div>
    </div>
    <p>© 2020 Maulaya Inc. All rights reserved.</p>
</div>
</body>
</html>