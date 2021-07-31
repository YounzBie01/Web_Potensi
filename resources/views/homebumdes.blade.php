<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylebumdes.css">


    <title>BUMDes | Website Desa Pakuran</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container">
            <img class="nvbumdes me-4" src="logo/bumdesp.png" alt="">
            <a class="navbar-brand" href="/homebumdes">BUMDes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav m-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/homebumdes">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mapcovid">Info Covid-19</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu dropdown" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#mapsotk">Struktur Organisasi</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#mapberita">Berita Terkini</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#mappotensi">Potensi Desa</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#mapumkm">UMKM</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/hometaruna">Karang Taruna<i class="fas fa-arrow-circle-right"></i></a>
                    </li>
                </ul>
                <form class="d-flex ms-auto">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" id="item1">
                <div class="container" id="carousel">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="item2">
                <div class="container" id="carousel">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="item3">
                <div class="container" id="carousel">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <!-- START THE FEATURETTES -->
    <div class="row featurette mt-3" id="ketua">
        <div class="col-md-6 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-6 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
            </svg>

        </div>
    </div>
    <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->

    <div class="container mt-2" id="mapsotk">
        <div class="heading text-center" id="sotk">
            <h1>SOTK</h1>
            <h5 class="tittle">Struktur Organisasi dan Tata Kerja BUMDes Desa Pakuran
                Buayan, Kabupaten Kebumen, Jawa Tengah</h5>
        </div>
    </div>
    <!-- Marketing messaging and featurettes
  ================================================== -->
    <div class="container marketing mt-4">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-3">
                <img src="logo/karang_taruna.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <h4>Nama</h4>
                <h5>Jabatan</h5>
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3">
                <img src="logo/karang_taruna.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <h4>Nama</h4>
                <h5>Jabatan</h5>
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3">
                <img src="logo/karang_taruna.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <h4>Nama</h4>
                <h5>Jabatan</h5>
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3">
                <img src="logo/karang_taruna.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <h4>Nama</h4>
                <h5>Jabatan</h5>
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div>
    <div class="container" id="selengkapnya">
        <a href="sotkbumdes.html"><button type="button" class="btn" id="moreact2">Selengkapnya</button></a>
    </div>

    <div class="container-fluid covid mt-5" id="mapcovid">
    </div>

    <div class="container mt-5" id="mapberita">
        <div class="container">
            <div class="heading">
                <h1 class="tittle2">Berita Terkini</h1>
            </div>
        </div>
        <div class="row act">
            <div class="card" style="width: 18rem;">
                <img src="logo/telaga tanado.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title ">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="detailactbumdes.html" class="btn" id="moreact">Selengkapnya</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="logo/telaga tanado.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="detailactbumdes.html" class="btn" id="moreact">Selengkapnya</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="logo/telaga tanado.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="detailactbumdes.html" class="btn" id="moreact">Selengkapnya</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="logo/telaga tanado.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="detailactbumdes.html" class="btn" id="moreact">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="container" id="selengkapnya">
            <a href="actbumdes.html" class="btn" id="moreact2">Berita lainnya</a>
        </div>
    </div>

    <div class="container mt-5" id="mappotensi">
        <div class="container">
            <div class="heading">
                <h1 class="tittle2">Potensi Desa</h1>
            </div>
        </div>
        <div class="row act">
            <div class="card" style="width: 18rem;">
                <img src="logo/telaga tanado.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title ">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="detailpotensi.html" class="btn" id="moreact">Selengkapnya</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="logo/telaga tanado.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="detailpotensi.html" class="btn" id="moreact">Selengkapnya</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="logo/telaga tanado.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="detailpotensi.html" class="btn" id="moreact">Selengkapnya</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="logo/telaga tanado.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="detailpotensi.html" class="btn" id="moreact">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="container" id="selengkapnya">
            <a href="potensi.html" class="btn" id="moreact2">Potensi lainnya</a>
        </div>
    </div>

    <div class="container mt-5" id="mapumkm">
        <div class="container">
            <div class="heading">
                <h1 class="tittle2">Usaha Mikro Kecil Menengah (UMKM)</h1>
            </div>
        </div>
        <div class="row act">
            <div class="card" style="width: 18rem;">
                <img src="logo/telaga tanado.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title ">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="detailumkm.html" class="btn" id="moreact">Selengkapnya</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="logo/telaga tanado.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="detailumkm.html" class="btn" id="moreact">Selengkapnya</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="logo/telaga tanado.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="detailumkm.html" class="btn" id="moreact">Selengkapnya</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="logo/telaga tanado.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="detailumkm.html" class="btn" id="moreact">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="container" id="selengkapnya">
            <a href="umkm.html" class="btn" id="moreact2">UMKM lainnya</a>
        </div>
    </div>


    <!--Footer-->
    <div class="container-fluid footer">
        <p class="copyright">Copyright 2021 - Pemerintah Desa Pakuran</p>
    </div>
































    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/aee467f5c4.js" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>