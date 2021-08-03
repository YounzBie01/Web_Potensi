@extends('layout.main')

@section('container')

@include('partials.carousel')

<div class="container mt-5" id="sotk">
    <h1 class="text-center">SOTK</h1>
    <h5 class="tittle">Struktur Organisasi dan Tata Kerja Karang Taruna Desa Pakuran
        Buayan, Kabupaten Kebumen, Jawa Tengah</h5>
    <div class="container" id="picsotk">
    </div>
</div>

<?php $jabatans = $profil_pengurus->groupBy('jabatan') ?>

@foreach ($jabatans as $jabatan)
<h2 class="text-center mt-4">{{ $jabatan->first()->jabatan }}</h2>

<?php $is_even = true; ?>

@foreach ($jabatan as $person)
    @if ($is_even)
    <div class="container mt-3" >
        <div class="row" id="itemsotkother">
            <div class="col-md-5">
                <div>
                    <img src="{{ $person->foto_path }}" alt="" class="bd-placeholder-img rounded-circle" width="120" height="120" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
                <div class="bio">
                    <p>Nama Lengkap : {{ $person->nama }}</p>
                    <p>HP : {{ $person->no_hp }}</p>
                    <p>NIK : {{ $person->nik }}</p>
                    <p>Jabatan : {{ $person->jabatan }}</p>
                    <p>Tempat, tanggal lahir : {{ $person->kota_lahir }}, {{ $person->tanggal_lahir }}</p>
                    <p>Jenis Kelamin : {{ $person->jenis_kelamin }} </p>
                    <p>Gol. Darah : {{ $person->gol_dar }}</p>
                    <p>Agama : {{ $person->agama }} </p>
                    <p>Kewarganegaraan : {{ $person->kewarganegaraan }}</p>
                    <p>Alamat : {{ $person->alamat }}</p>
                </div>
            </div>    
    @else
            <div class="col-md-5">
                <div>
                    <img src="{{ $person->foto_path }}" alt="" class="bd-placeholder-img rounded-circle" width="120" height="120" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
                <div class="bio">
                    <p>Nama Lengkap : {{ $person->nama }}</p>
                    <p>HP : {{ $person->no_hp }}</p>
                    <p>NIK : {{ $person->nik }}</p>
                    <p>Jabatan : {{ $person->jabatan }}</p>
                    <p>Tempat, tanggal lahir : {{ $person->kota_lahir }}, {{ $person->tanggal_lahir }}</p>
                    <p>Jenis Kelamin : {{ $person->jenis_kelamin }} </p>
                    <p>Gol. Darah : {{ $person->gol_dar }}</p>
                    <p>Agama : {{ $person->agama }} </p>
                    <p>Kewarganegaraan : {{ $person->kewarganegaraan }}</p>
                    <p>Alamat : {{ $person->alamat }}</p>
                </div>
            </div>
        </div>
    </div>
    @endif

    <?php $is_even = !$is_even; ?>
@endforeach

@if (!$is_even)
        </div>
    </div>
@endif

@endforeach


<div class="container">
{!! $lower_text->detail !!}

    
@endsection