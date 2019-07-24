@extends('admin.layouts.admin')

@section('title', 'Create Hall')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Create hall</h4>
                            </div>
                          </div>
                    </div>
                    <div class="card-body">
    <form action="/admin/hall/create" method="post">
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
            <label for="status">Status</label>
            <select name="status" id="status"  class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
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
