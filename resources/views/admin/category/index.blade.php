@extends('admin.layouts.admin')

@section('title', 'Films list')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="card-header">
                                <h4 class="card-title"> Simple Table</h4>
                            </div>
                        </div>
                        <div class="col-sm-4 text-right">
                            <a class="btn btn-primary" href="/admin/category/create">Create film</a>
                        </div>

                    </div>
                    <div class="card-body">
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Image
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Update
                                </th>
                                <th>
                                    Delete
                                </th>
                                </thead>
                                <tbody>

                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $category->image }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $model->status($category->status) }}</td>
                                            <td><a href="/admin/category/update/{{$category->id}}"><i
                                                            class="nc-icon nc-ruler-pencil"></i></a></td>
                                            <td><a href="/admin/category/delete/{{$category->id}}" data-url="/admin/category/delete/" data-id="{{$category->id}}" class="delete"><i
                                                            class="nc-icon nc-simple-remove"></i></a></td>
                                        </tr>
                                        <br>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection