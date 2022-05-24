@extends('layouts.app')
@section('title', $serie['title'])


@section('detail')
    {{-- @dump($serie) --}}
    <div class="container-comics-card-detail">
        <div class="container-card">
            <div class="card-comics">
                <img src="{{ $serie['thumb'] }}" alt="{{ $serie['title'] }}">
            </div>
            <div class="card-info">
                <h3>"{{ $serie['title'] }}"</h3>
                <h5>"{{ $serie['price'] }}"</h5>
                <p>"{{ $serie['description'] }}"</p>
            </div>
        </div>

        <div class="container-info">
            <div>
                <h4>ARTIST</h4>
                @foreach ($serie['artists'] as $artist)
                    <ul>
                        <li class="artist">{{ $artist }}</li>
                    </ul>
                @endforeach
            </div>
            <div>
                <h4>WRITER</h4>
                @foreach ($serie['writers'] as $writer)
                    <ul>
                        <li class="writers">{{ $writer }}</li>
                    </ul>
                @endforeach
            </div>
        </div>

        <div class="text-container-detail">
            <a href="/comics">
                <h3 class="txt">BACK COMICS</h3>
            </a>
        </div>

    </div>

@endsection
