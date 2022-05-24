@extends('layouts.app')
@section('title', $serie['title'])


@section('detail')
    {{-- @dump($serie) --}}
    <div class="container-comics-card">
        <div class="container-card">

            <div class="card-comics">
                <img src="{{ $serie['thumb'] }}" alt="{{ $serie['title'] }}">
                <h3>"{{ $serie['title'] }}"</h3>
                <h5>"{{ $serie['price'] }}"</h5>
                <p>"{{ $serie['description'] }}"</p>
            </div>

            @foreach ($serie['artists'] as $artist)
                <div>
                    <h4>ARTIST</h4>
                    <ul>
                        <li>{{ $artist }}</li>
                    </ul>
                </div>
            @endforeach

        </div>

        @foreach ($serie['writers'] as $writer)
            <div>
                <h4>WRITER</h4>
                <ul>
                    <li>{{ $writer }}</li>
                </ul>
            </div>
        @endforeach

        <div class="text-container">
            <a href="/comics">
                <h3 class="txt">BACK COMICS</h3>
            </a>
        </div>

    </div>

@endsection
