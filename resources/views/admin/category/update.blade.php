@extends('admin.layouts.admin')

@section('title', 'Update Category')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Update Category</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/admin/category/update/{{$data->id}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text"  class="form-control" name="name" id="name" value="{{$data->name}}">
                            </div>

                            <div class="form-group">
                                <label for="url">Url</label>
                                <input type="text" class="form-control" name="url" id="url" value="{{$data->url}}">
                            </div>

                            <div class="form-group">
                                <label for="short_content">Short content</label>
                                <textarea id="short_content" class="form-control" name="short_content">{{$data->short_content}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea id="content" class="form-control" name="content">{{$data->content}}</textarea>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-1">
                                    <input type="submit" value="Save" name="save" class="btn btn-success">
                                </div>
                                <div class="col-md-1">
                                    <input type="submit" value="Apply" name="apply" class="btn btn-default">
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
@endsection
