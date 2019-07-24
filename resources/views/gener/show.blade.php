@extends('layouts.app')
@section('content')
<section class="centered">
    <h3>Films in category</h3>
    <div class="movies">
    <h1 class="movietitle"> {{ $genres->name }}</h1>
    </div>

    @foreach ($films as $film)
        <div class="mov">
            <a href="/films/detail/{{$film->id}}">
            <img src="{{App\FileUpload::getImage($film->image)}}" widht="300" height="300">
     
                <h2 class="movietitle"> {{ $film->name }}</h2>
            </a>
        </div>
        @endforeach


</section>
@endsection

