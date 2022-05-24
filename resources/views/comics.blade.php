@extends('layouts.app')
@section('title', 'Current Series')

@section('content')

    <div class="container-comics-card">
        <div class="container-card">

            @foreach ($series as $key => $serie)
                {{-- @dump($key, $serie) --}}
                <div class="card-comics">

                    <a href="/comics/detail/{{ $key + 1 }}">
                        <img src="{{ $serie['thumb'] }}" alt="{{ $serie['title'] }}">
                        <h2>
                            {{ $serie['series'] }}
                        </h2>
                    </a>

                </div>
            @endforeach

        </div>

    </div>

    <div class="text-container">
        <a href="/">
            <h3 class="txt">BACK HOME</h3>
        </a>
    </div>
@endsection
