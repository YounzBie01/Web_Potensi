@extends('layout.main')

@section('container')

@include('partials.carousel')

<div class="container" id="frameluar">
@foreach ($articles as $article)    
<div class="container mt-2" id="frameact">
    <div class="row" id="pageact">
        <div class="col-md-4" id="itemact">
            <img id="picact" src="{{ $path_norm }}{{ $article->highlight_photo_path }}" alt="...">
        </div>
        <div class="col-md-6">
                <h2 class="mt-2">{{ $article->title }}</h2>
                <p>{{ $article->excerpt }}</p>
                <div class="text-end">
                    <a href="/taruna/kegiatan/{{ $article->slug }}" class="btn" id="moreact">Selengkapnya</a>
                </div>
        </div>
    </div>
</div>
@endforeach
</div>
{{ $articles->links() }}


@endsection