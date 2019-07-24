@extends('admin.layouts.admin')

@section('title' , 'Список фильмов')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">List of films</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="/admin/films/create" class="btn btn-success">Create film</a>
                            </div>
                        </div>
                    </div>
                     <div class="card-body">
                        <div class="table-responsive">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                             <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Image
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    URL
                                </th>
                                <th class="text-center">
                                    Status
                                </th>
                                <th class="text-center">
                                    <i class="nc-icon nc-ruler-pencil"></i>
                                </th>
                                <th class="text-center">
                                    <i class="nc-icon nc-simple-remove"></i>
                                </th>
                                </thead>
                                <tbody>
                                @foreach($films as $film)
                                    <tr>
                                        <td>{{$film->image}}</td>
                                        <td>{{$film->name}}</td>
                                        <td>{{$film->url}}</td>
                                        <td class="text-center">{{ $model->status($film->status)}}</td>
                                        <td class="text-center"><a href="/admin/films/update/{{$film->id}}"><i class="nc-icon nc-ruler-pencil"></i></a></td>
                                        <td class="text-center"><a href="/admin/films/delete/{{$film->id}}" data-id="{{$film->id}}" class="delete"><i class="nc-icon nc-simple-remove"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $films->links() }}
                        </div>
                    </div>
                </div>
            </div>
</div>
    </div>
@endsection
