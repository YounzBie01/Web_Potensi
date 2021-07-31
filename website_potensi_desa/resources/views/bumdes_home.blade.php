@extends('layout.main')

@section('container')

@include('partials.carousel')

<!-- START THE FEATURETTES -->
<div class="row featurette mt-3" id="ketua">
  <div class="col-md-6 order-md-2">
    <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
    <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
  </div>
  <div class="col-md-6 order-md-1">
    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

  </div>
</div>
<!-- /END THE FEATURETTES -->


<div class="container mt-2" id="mapsotk">
  <div class="heading text-center" id="sotk">
    <h1>SOTK</h1>
    <h5 class="tittle">Struktur Organisasi dan Tata Kerja Karang Taruna Desa Pakuran
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
<a href="sotktaruna.html" class="btn" id="moreact2">Selengkapnya</a>
</div>

<div class="container-fluid covid mt-5">
</div>

<div class="container mt-5" id="mapact">
  <div class="container">
    <div class="heading">
      <h1 class="tittle2">Kegiatan Terkini</h1>
    </div>
  </div>
  <div class="row act">
    <div class="card" style="width: 18rem;">
      <img src="logo/telaga tanado.jpeg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title ">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="detailactkarang.html" class="btn" id="moreact">Selengkapnya</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="logo/telaga tanado.jpeg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="detailactkarang.html" class="btn" id="moreact">Selengkapnya</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="logo/telaga tanado.jpeg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="detailactkarang.html" class="btn" id="moreact">Selengkapnya</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="logo/telaga tanado.jpeg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="detailactkarang.html" class="btn" id="moreact">Selengkapnya</a>
      </div>
    </div>
  </div>
  <div class="container" id="selengkapnya">
    <a href="#" class="btn" id="moreact2">Kegiatan lainnya</a>
  </div>
</div>


@endsection