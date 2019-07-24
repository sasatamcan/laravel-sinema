@extends('layouts.app')
@section('content')
<section class="centered">
    <h3>Action</h3>
    <div class="movies">

        @foreach ($genres as $genre)
        <div class="mov">
            <a href="films/show/{{$genre->id}}">
                <img src="/public/images/6.jpg">
                <h2 class="movietitle"> {{ $genre->name }}</h2>
            </a>
        </div>
        @endforeach

    </div>

    {{ $genres->links() }}

</section>
@endsection