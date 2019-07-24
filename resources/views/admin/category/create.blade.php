@extends('layouts.admin')

@section('title', 'Create Category')

@section('content')
    <h1>Create Category</h1>
    <form action="/admin/category/create" method="post">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <label for="name">Название</label>
        <input type="text" name="name" id="name">

        <label for="url">Url</label>
        <input type="text" name="url" id="url">

        <label for="short_content">Краткое описание</label>
        <textarea id="short_content" name="short_content"></textarea>

        <label for="content">Oписание</label>
        <textarea id="content" name="content"></textarea>

        <input type="submit" value="Сохранить">


    </form>
@endsection
