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
                                <h4 class="card-title">@lang('backend.list_showtime')</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="/admin/showtime/create" class="btn btn-success">>@lang('backend.create_showtime')</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    @lang('backend.hall_name')
                                </th>
                                <th>
                                    @lang('backend.time')
                                </th>

                                <th class="text-center">
                                    <i class="nc-icon nc-ruler-pencil"></i>
                                </th>
                                <th class="text-center">
                                    <i class="nc-icon nc-simple-remove"></i>
                                </th>
                                </thead>
                                <tbody>
                                @foreach($showtimes as $showtime)
                                    <tr>
                                        <td class="text-center">{{ $model->getHallById($showtime->hall_id)}}</td>
                                        <td class="text-center">{{ App\Showtime::getFilmById($showtime->film_id)}}</td>
                                        <td>{{$showtime->time}}</td>
                                        <td class="text-center"><a href="/admin/showtime/update/{{$showtime->id}}"><i class="nc-icon nc-ruler-pencil"></i></a></td>
                                        <td class="text-center"><a href="/admin/showtime/delete/{{$showtime->id}}"><i class="nc-icon nc-simple-remove"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $showtimes->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
