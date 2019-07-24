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
                                <h4 class="card-title">Update hall</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/admin/hall/update/{{$data->id}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text"  class="form-control" name="name" id="name" value="{{$data->name}}" required>
                            </div>

                            <div class="form-group">
                                <label for="url">Url</label>
                                <input type="text" class="form-control" name="url" id="url" value="{{$data->url}}" required>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status"  class="form-control" required>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
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
