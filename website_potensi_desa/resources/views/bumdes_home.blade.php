@extends('layout.main')

@section('container')

@include('partials.carousel')

<!-- START THE FEATURETTES -->
<div class="row featurette mt-3" id="ketua">
  <div class="col-md-6 order-md-2">
    <h2 class="featurette-heading">{{ $quote_ketua->bumdes_quote }} <span class="text-muted"><br><br><br>{{ $profil_ketua[1]->nama }}</span></h2>
    <p class="lead">Ketua BUMDes Dusun Pakuran 2021</p>
  </div>
  <div class="col-md-6 order-md-1">
    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
  </div>
</div>
<!-- /END THE FEATURETTES -->


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
        <img src="{{ $profil_pelindung[0]->foto_path }}" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h4>{{ $profil_pelindung[0]->nama }}</h4>
        <h5>{{ $profil_pelindung[0]->jabatan }}</h5>
      </div><!-- /.col-lg-3 -->
      <div class="col-lg-3">
        <img src="{{ $profil_ketua[1]->foto_path }}" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h4>{{ $profil_ketua[1]->nama }}</h4>
        <h5>{{ $profil_ketua[1]->jabatan }}</h5>
      </div><!-- /.col-lg-3 -->
      <div class="col-lg-3">
        <img src={{ $profil_sekretaris[2]->foto_path }} alt="" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h4>{{ $profil_sekretaris[2]->nama }}</h4>
        <h5>{{ $profil_sekretaris[2]->jabatan }}</h5>
      </div><!-- /.col-lg-3 -->
      <div class="col-lg-3">
        <img src={{ $profil_bendahara[3]->foto_path }} alt="" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h4>{{ $profil_bendahara[3]->nama }}</h4>
        <h5>{{ $profil_bendahara[3]->jabatan }}</h5>
      </div><!-- /.col-lg-3 -->
    </div><!-- /.row -->
</div>

<div class="container" id="selengkapnya">
<a href="/bumdes/sotk"><button type="button" class="btn" id="moreact2">Selengkapnya</button></a>
</div>

<div class="container-fluid covid mt-5">
</div>

<div class="container mt-5" id="mapberita">
  <div class="container">
    <div class="heading">
      <h1 class="tittle2">Berita Terkini</h1>
    </div>
  </div>
  <div class="row act">
    @for ($i = 1; $i < 5; $i++)
    <div class="card" style="width: 18rem;">
      <img src={{ $berita_posts_highlight->take(-$i)->first()->highlight_photo_path ?? 'logo\telaga_tanado.jpeg' }} class="card-img-top" alt="...">
      {{-- <img src="logo/telaga_tanado.jpeg" class="card-img-top" alt="..."> --}}
      <div class="card-body text-center">
        <h5 class="card-title ">{{ $berita_posts_highlight->take(-$i)->first()->title ?? "yyy" }}</h5>
        <p class="card-text">{{ $berita_posts_highlight->take(-$i)->first()->excerpt ?? "yyy" }}</p>
        <a href="{{ $berita_posts_highlight->take(-$i)->first()->slug ?? "yyy" }}" class="btn" id="moreact">Selengkapnya</a>
      </div>
    </div>
    @endfor
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
    @for ($i = 1; $i < 5; $i++)
    <div class="card" style="width: 18rem;">
      <img src={{ $potensi_posts_highlight->take(-$i)->first()->highlight_photo_path ?? 'logo\telaga_tanado.jpeg' }} class="card-img-top" alt="...">
      {{-- <img src="logo/telaga_tanado.jpeg" class="card-img-top" alt="..."> --}}
      <div class="card-body text-center">
        <h5 class="card-title ">{{ $potensi_posts_highlight->take(-$i)->first()->title ?? "yyy" }}</h5>
        <p class="card-text">{{ $potensi_posts_highlight->take(-$i)->first()->excerpt ?? "yyy" }}</p>
        <a href="{{ $potensi_posts_highlight->take(-$i)->first()->slug ?? "yyy" }}" class="btn" id="moreact">Selengkapnya</a>
      </div>
    </div>
    @endfor
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
    @for ($i = 1; $i < 5; $i++)
    <div class="card" style="width: 18rem;">
      <img src={{ $umkm_posts_highlight->take(-$i)->first()->highlight_photo_path ?? 'logo\telaga_tanado.jpeg' }} class="card-img-top" alt="...">
      {{-- <img src="logo/telaga_tanado.jpeg" class="card-img-top" alt="..."> --}}
      <div class="card-body text-center">
        <h5 class="card-title ">{{ $umkm_posts_highlight->take(-$i)->first()->title ?? "yyy" }}</h5>
        <p class="card-text">{{ $umkm_posts_highlight->take(-$i)->first()->excerpt ?? "yyy" }}</p>
        <a href="{{ $umkm_posts_highlight->take(-$i)->first()->slug ?? "yyy" }}" class="btn" id="moreact">Selengkapnya</a>
      </div>
    </div>
    @endfor
  </div>
  <div class="container" id="selengkapnya">
    <a href="umkm.html" class="btn" id="moreact2">UMKM lainnya</a>
  </div>
</div>


@endsection