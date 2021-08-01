<!--Navbar-->
<nav class="navbar navbar-expand-md fixed-top">
    <div class="container">

        @if ($web_name == "bumdes")
            <img class="nvbumdes me-4" src="logo/bumdesp.png" alt="">
            <a class="navbar-brand" href="/bumdes">BUMDes</a>
        @else
            <img class="nvtaruna me-4" src="logo/karang_taruna.png" alt="">
            <a class="navbar-brand" href="/taruna">Karang Taruna</a>
        @endif

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav m-auto mb-2 mb-md-0">
            <li class="nav-item">
                @if ($web_name == "bumdes")
                    <a class="nav-link" aria-current="page" href="/bumdes">Beranda</a>                
                @else
                    <a class="nav-link" aria-current="page" href="/taruna">Beranda</a>
                @endif
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
                <li><hr class="dropdown-divider"></li>
                
                @if ($web_name == "bumdes")
                    <li><a class="dropdown-item" href="#mapberita">Berita Terkini</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#mappotensi">Potensi Desa</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#mapumkm">UMKM</a></li>
                @else
                    <li><a class="dropdown-item" href="#mapact">Kegiatan</a></li>
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
  