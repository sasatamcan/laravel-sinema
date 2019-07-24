@extends('admin.layouts.admin')

@section('title', 'Create Films')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Create film</h4>
                            </div>
                          </div>
                    </div>
                    <div class="card-body">
    <form action="/admin/films/create" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text"  class="form-control" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="url">Url</label>
            <input type="text" class="form-control" name="url" id="url">
        </div>

        <div class="form-group">
            <label for="short_content">Short content</label>
            <textarea id="short_content" class="form-control" name="short_content"></textarea>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" class="form-control" name="content"></textarea>
        </div>

        <div class="form-group">
            <label for="year">Release date</label>
            <input type="text" class="form-control" name="year" id="year">
        </div>

        <div class="form-group">
            <label for="trailer">Trailer link</label>
            <input type="text" name="trailer" class="form-control" id="trailer">
        </div>

        <div class="form-group">
            <label for="film">Film link</label>
            <input type="text" name="film" class="form-control" id="film">
        </div>

        <div class="form-group">
            <label for="actor">Actors</label>
            <textarea id="actor" name="actor"  class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="category_ids">Genre</label>
            <select name="category_ids[]" id="category_ids" multiple  class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <input type="submit" value="Save" class="btn btn-success">
        </div>
</form>


                    </div>
                </div>
            </div>
@endsection
