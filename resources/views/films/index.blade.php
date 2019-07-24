@extends('layouts.app')
@section('content')
<section class="centered">
    <h3>Фильмы</h3>
    <div class="movies">

        @foreach ($films as $film)
        <div class="mov">
            <a href="/films/detail/{{$film->id}}">
            <img src="{{App\FileUpload::getImage($film->image)}}">
     
                <h2 class="movietitle"> {{ $film->name }}</h2>
            </a>
        </div>
        @endforeach

    </div>

    {{ $films->links() }}

</section>
@endsection
