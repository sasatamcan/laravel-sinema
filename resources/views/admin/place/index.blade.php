@extends('admin.layouts.admin')

@section('title' , 'List of place')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">List of place</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="/admin/place/create" class="btn btn-success">Create place</a>
                            </div>
                        </div>
                    </div>
                     <div class="card-body">
                     <meta name="csrf-token" content="{{ csrf_token() }}">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">

                                <th class="text-center">
                                    ID
                                </th>
                                <th class="text-center">
                                    <i class="nc-icon nc-ruler-pencil"></i>
                                </th>
                                <th class="text-center">
                                    <i class="nc-icon nc-simple-remove"></i>
                                </th>
                                </thead>
                                <tbody>
                                @foreach($places as $place)
                                    <tr>
                                        <td>{{$place->id}}</td>
                                        <td class="text-center"><a href="/admin/place/update/{{$place->id}}"><i class="nc-icon nc-ruler-pencil"></i></a></td>
                                        <td class="text-center"><a href="/admin/place/delete/{{$place->id}}"  data-id="{{$place->id}}" class="delete"><i class="nc-icon nc-simple-remove"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $places->links() }}
                        </div>
                    </div>
                </div>
            </div>
</div>
    </div>
@endsection