@extends('admin.layouts.admin')

@section('title', 'Create Place')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">@lang('backend.create_showtime')</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/admin/showtime/create" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="hall_id">Hall id</label>
                                <select name="hall_id" id="hall_id"  class="form-control">
                                    @foreach($hallList as $hall)
                                        <option value="{{$hall->id}}">{{$hall->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="film_id">Films</label>
                                <select name="film_id" id="film_id"  class="form-control">
                                    @foreach($filmList as $film)
                                        <option value="{{$film->id}}">{{$film->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="text" class="form-control" name="time" id="time" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" value="Save" name="save" class="btn btn-success">
                            </div>
                        </form>


                    </div>
                </div>
            </div>
@endsection
