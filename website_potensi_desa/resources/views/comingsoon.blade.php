@extends('layout.main')

@section('container')

@include('partials.carousel')

<div class="container" id="soon">
    <div class="soon">
        <h3>Cooming Soon</h3>
    </div>
    <div class="text-center">
        <a href="{{ $parent_dir }}" class="btn" id="moreact2">Kembali ke Beranda</a>
    </div>
</div>

@endsection