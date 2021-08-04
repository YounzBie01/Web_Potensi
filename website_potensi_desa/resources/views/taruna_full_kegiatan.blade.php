@extends('layout.main')

@section('container')
    
@include('partials.carousel')

<div class="container mt-3">
    <div class="heading text-center" id="sotk">
      <h1>{{ $article->title }}</h1>
    </div>

    <img src="{{ $path_norm }}{{ $article->highlight_photo_path }}" alt="Photo">

    <div class="container">
        {!! $article->body !!}
    </div>
</div>

<div class="previous">
    <a href="{{ $parent_dir }}" class="btn" id="back"><i class="fas fa-long-arrow-alt-left" id="panahkiri"></i>Artikel Lainnya</a>
</div>


@endsection