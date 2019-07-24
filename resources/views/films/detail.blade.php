@extends('layouts.app')
@section('content')

<section class="centered">
@php
echo view('common.breadcrumbs', ['breadcrumbs'=>$breadcrumbs]);
@endphp
 
 
    <img src="{{App\FileUpload::getImage($result->image)}}" widht="300" height="300">
    </br>

    <label for="name">Название</label>
    <h3> {{ $result->name }}</h3>

    <label for="short_content">Краткое описание</label>
    <h3> {{ $result->short_content }}</h3>
    @php
        echo view('booking.hall', ['film_id'=>$result->id]);
    @endphp


    <label for="content">Описпние</label>
    <h3> {{ $result->content }}</h3>

    <label for="author">Режиссер:</label>
    <h3> {{ $result->author }}</h3>

    <label for="short_content">Актеры</label>
    <h3> {{ $result->actor }}</h3>

    <label for="short_content">Год выпуска</label>
    <h3> {{ $result->year}}</h3>

    



</section>
@endsection
