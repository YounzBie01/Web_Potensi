<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @if ($web_name == "bumdes")
        <title>BUMDes | Website Desa Pakuran</title>
    @else
        <title>Karang Taruna | Website Desa Pakuran</title>
    @endif
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
    @if ($web_name == "bumdes")
    {
      <link rel="stylesheet" href="{{ asset('css/stylebumdes.css') }}">      
    }
    @else
    {
      <link rel="stylesheet" href="{{ asset('css/styletaruna.css') }}">
    }
    @endif
  </head>


  <body>
    <nav class="navbar navbar-expand-md fixed-top">
      <div class="container">
  
          @if ($web_name == "bumdes")
              <img class="nvbumdes me-4" src="{{ asset('logo/bumdesp.png') }}" alt="">
              <a class="navbar-brand" href="/bumdes#">BUMDes</a>
          @else
              <img class="nvtaruna me-4" src="{{ asset('logo/karang_taruna.png') }}" alt="">
              <a class="navbar-brand" href="/taruna#">Karang Taruna</a>
          @endif
  
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav m-auto mb-2 mb-md-0">
              <li class="nav-item">
                  @if ($web_name == "bumdes")
                      <a class="nav-link" aria-current="page" href="/bumdes#">Beranda</a>                
                  @else
                      <a class="nav-link" aria-current="page" href="/taruna#">Beranda</a>
                  @endif
              </li>
  
              <li class="nav-item">
              <a class="nav-link" href="{{ $web_name }}#mapcovid">Info Covid-19</a>
              </li>
  
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profil
              </a>
              <ul class="dropdown-menu dropdown" aria-labelledby="navbarDarkDropdownMenuLink">
                  
                  @if ($web_name == "bumdes")
                      <li><a class="dropdown-item" href="/{{ $web_name }}#mapsotk">Struktur Organisasi</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/{{ $web_name }}#mapberita">Berita Terkini</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/{{ $web_name }}#mappotensi">Potensi Desa</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/{{ $web_name }}#mapumkm">UMKM</a></li>
                  @else
                      <li><a class="dropdown-item" href="/{{ $web_name }}#mapsotk">Struktur Organisasi</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/{{ $web_name }}#mapact">Kegiatan</a></li>
                  @endif
  
              </ul>
              </li>
  
              <li class="nav-item">
                 <a class="nav-link" href="#kontak">Kontak</a>
              </li>
  
              @if ($web_name == "bumdes")
                  <li class="nav-item">
                  <a class="nav-link" href="/taruna">Karang Taruna<i class="fas fa-arrow-circle-right"></i></a>
                  </li>
              @else
                  <li class="nav-item">
                  <a class="nav-link" href="/bumdes">BUMDes <i class="fas fa-arrow-circle-right"></i></a>
                  </li>
              @endif
  
          </ul>
          <form class="d-flex ms-auto">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
          </div>
      </div>
  </nav>
    

    <div class = "container mt-4">
        @yield('container')
    </div>


<!--Footer-->


<div class="container-fluid footer">
<div class="me-3 text-end">
    <a href="/{{ $web_name }}/soon" class="btn" id="bantu"><i class="fab fa-whatsapp"></i><h6>Ada yang bisa dibantu?</h6></a>
</div>

<div class="container hiya">
    <div class="row mb-2 ">
    <div class="col-1 me-4">
        <a href="/{{ $web_name }}/soon" ><i class="fab fa-instagram"></i></a>
    </div>
    <div class="col-1 me-4">
        <a href="/{{ $web_name }}/soon" ><i class="fab fa-facebook"></i></a>
    </div>
    <div class="col-1 me-4">
        <a href="/{{ $web_name }}/soon" ><i class="fab fa-youtube"></i></a>
    </div>
    </div>
    <p class="text-center">Copyright 2021 - Pemerintah Desa Pakuran</p>
  </div>
  </div>
      

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/aee467f5c4.js" crossorigin="anonymous"></script>
  </body>
</html>