@extends('admin.layouts.admin')

@section('title' , 'List of hall')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">List of hall</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="/admin/hall/create" class="btn btn-success">Create hall</a>
                            </div>
                        </div>
                    </div>
                     <div class="card-body">
                     <meta name="csrf-token" content="{{ csrf_token() }}">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
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
                                @foreach($halls as $hall)
                                    <tr>
                                         <td>{{$hall->name}}</td>
                                        <td>{{$hall->url}}</td>
                                        <td class="text-center">{{ $model->status($hall->status)}}</td>
                                        <td class="text-center"><a href="/admin/hall/update/{{$hall->id}}"><i class="nc-icon nc-ruler-pencil"></i></a></td>
                                        <td class="text-center"><a href="/admin/hall/delete/{{$hall->id}}  data-id="{{$hall->id}}" class="delete"><i class="nc-icon nc-simple-remove"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $halls->links() }}
                        </div>
                    </div>
                </div>
            </div>
</div>
    </div>
@endsection