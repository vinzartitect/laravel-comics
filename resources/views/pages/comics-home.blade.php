@extends('layouts.main-layout')
@section('content')
    <main>
        <div class="hero">
            <img src="{{url('img/jumbotron.jpg')}}" alt="">
        </div>
        <h1>
            home content
        </h1>
        <a href="{{'details'}}">Go to details</a>
    </main>
@endsection