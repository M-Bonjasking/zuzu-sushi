<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.php">Home</a>
                <a class="nav-item nav-link" href="#">bezorging</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link disabled" href="#">Disabled</a>
            </div>
        </div>
    </div>
</nav>

<div class="header-image">
    <div class="background py-5">
        <div class="row py-3">
        </div>
    </div>
</div>
<section class="container-sm mt-3">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Goedendag, welkom bij zuzu</h1>
        </div>
        <div class="col-12 text-center">
            <span class="fw-lighter"> wij zijn gespecialiseerd in de japanse keuken</span>
            <p class="fw-lighter">text placeholder</p>
        </div>
    </div>
    <div class="text-center">
        <span>
            <?php
              setlocale(LC_ALL, 'dutch');

              echo strftime("<b>vandaag is %A %e %B %Y <b></b><br>");
              echo strftime("bezorgtijd is vanaf nu: %R");
            ?>
        </span>
    </div>
       <br>
</section>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card" style="...">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card" style="...">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer bg-dark text-white mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 footer-contact text-center">
                <h3>contact gegevens</h3>
                restaurant zuzu<br>
                mangolaan 4<br>
                3062 AB<br>
                zuzu@gmail.com<br>
                06-12345678
            </div>

            <div class="col-lg-6 col-md-6 text-center text-center">
                <div class="footer-links">
                    <h3>openingstijden</h3>
                    maandag  gesloten<br>
                    dinsdag 16:00 - 22:00<br>
                    woensdag 16:00 - 22:00<br>
                    donderdag 16:00 - 22:00<br>
                    vrijdag 15:00 - 22:00<br>
                    zaterdag 15:00 - 22:00<br>
                    dinsdag gesloten<br>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>