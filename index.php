<!-- Kode version 0.1-h -->
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

    #papanbox-navbar{
        background-image: url("https://res.cloudinary.com/dw5hlq8f7/image/upload/v1582818300/papanboxbg_y8zhzq.jpg");
        background-color: skyblue;
        width: 100%;
    }


    #papanbox{
        background-image: url("https://res.cloudinary.com/dw5hlq8f7/image/upload/v1582818300/papanboxbg_y8zhzq.jpg");
        background-color: skyblue;
        width: 100%;
    }

</style>
</head>
<body>
<!-- File yang sudah mencoba menggunakan cloudinary.com-->
<nav class="navbar navbar-expand-md navbar-dark" id="papanbox-navbar">
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

<div class="jumbotron jumbotron-fluid pb-3" id="papanbox">
    <p id="papankata">BELAJAR BAHASA INGGRIS LEBIH MUDAH</p>
    <p id="papankata">DI</p><img height="100" width="250"  style="display: block; margin: auto;" src="https://res.cloudinary.com/dw5hlq8f7/image/upload/v1582817859/logov2_nw2od7.png"><br/>
    <a href="#"><button  class="btn-lg btn-outline-primary"  style="display: block; margin: auto; background: transparent; color: white;border-width: 2.5px;border-color:white;">MULAI BELAJAR</button></a><br/><br/>
</div>

<div class="container mb-5">
<!-- Selain flex, bisa pakai col-md-4 juga -->
    <div class="row text-center">
        <div class="col mt-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h4 class="card-title">Daftar Pertanyaan</h4>
                    <img class="card-img-top" src="develop-img/question.png" alt="Kursus">
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Klik Disini</a>
                </div>
            </div>
        </div>
        <div class="col mt-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h4 class="card-title">Butuh Kursus?</h4>
                    <img class="card-img-top" src="develop-img/teaching.png" alt="Kursus">
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Klik Disini</a>
                </div>
            </div>
        </div>
        <div class="col mt-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h4 class="card-title">Kontak Kami</h4>
                    <img class="card-img-top" src="develop-img/phone-book.png" alt="Kursus">
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Klik Disini</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col">
            <img src="https://res.cloudinary.com/dw5hlq8f7/image/upload/v1582818179/seminar_shspac.png" width="100%" height="100%"/>
    </div>
    <div class="col mr-3" style="background-image:url(https://res.cloudinary.com/dw5hlq8f7/image/upload/v1582873172/bg_pemisah_seminar_2x_rjrq1z.png)">
        <h1 class="text-center mt-3" style="color:white;">
            Seminar dan Pelatihan
        </h1>
        <br><br>
        <h5 style="color:white;">
            Kami sudah mengadakan seminar dan pelatihan di berbagai  universitas-universitas di Indonesia diantaranya :<br> 
            IU, UBT, UMG, ATIKOM, UJN, BU, UMN, dll <br>dan juga di beberapa perusahaan seperti : <br>PT. Subur Mandiri, PT. Tekom, 
            PT. Karya Jaya, PT. Endosa, dll
        </h5>
    </div>
</div> 
</div>

<div class="container text-center mt-5 mb-4">
    <div class="row">
        <div class="col">
            <h1>PENDAPAT MEREKA TENTANG KAMI</h1>
        </div>
    </div>
</div>
    
    <!-- <button id="buttonleft"></button> -->
    <div class="container mb-4">
        <div class="row">
            <div class="col dev-1">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="develop-img/1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">Dian Johan</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col dev-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="develop-img/4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">Ghadah Indri</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col dev-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="develop-img/3.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">Maulaya Al-Farisi</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <button id="buttonright"></button>-->
</div>

<div style="background-color:black; padding: 2px 0px 10px 0px;">
<div class="container mt-5" style="color:white;">
    <div class="row">
        <div class="col">
            <h5>Ex:Menu Foot Title</h5>
            <p>Ex:Submenu title1</p>
            <p>Ex:Submenu title2</p>
            <p>Ex:Submenu title3</p>
            <p>Ex:Submenu title4</p>
        </div>
        <div class="col">
            <h5>Ex:Menu Foot Title</h5>
            <p>Ex:Submenu title1</p>
            <p>Ex:Submenu title2</p>
            <p>Ex:Submenu title3</p>
            <p>Ex:Submenu title4</p>
        </div>
        <div class="col">
            <h5>Ex:Menu Foot Title</h5>
            <p>Ex:Submenu title1</p>
            <p>Ex:Submenu title2</p>
            <p>Ex:Submenu title3</p>
            <p>Ex:Submenu title4</p>
        </div>
        <div class="col">
            <h4>Mobile App</h4>
            <a href=""><img src="https://res.cloudinary.com/dw5hlq8f7/image/upload/v1582818246/gplay_hq2aje.png"/></a><br/>
            <a href=""><img src="https://res.cloudinary.com/dw5hlq8f7/image/upload/v1582818245/appstore_xrs27j.png"/></a>
        </div>
    </div>
    <div class="mt-3 text-center">
        <p>Dovia Inc <?php echo date('Y'); ?>.</p>
    </div>
</div>
</div>
</body>
</html>