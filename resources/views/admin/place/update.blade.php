@extends('admin.layouts.admin')

@section('title', 'Update Place')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Update place</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/admin/place/update/{{$data->id}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="hall_id">Hall id</label>
                                <select name="hall_id" id="hall_id"  class="form-control">
                                    @foreach($hallList as $hall)
                                        <option value="{{$hall->id}}"  @php if($hall->id ==  $data->hall_id) echo 'selected';  @endphp>{{$hall->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="seat_row">Seat row</label>
                                <input type="text" class="form-control" name="seat_row" id="seat_row" value="{{$data->seat_row}}" required pattern="^[0-9]+$">
                            </div>
                            <div class="form-group">
                                <label for="seat_place">Seat place</label>
                                <input type="text" class="form-control" name="seat_place" id="seat_place"  value="{{$data->seat_place}}" required pattern="^[0-9]+$">
                            </div>

                            <div class="form-group">
                                <label for="seat_place">Type</label>
                                <input type="text" class="form-control" name="type" id="type" value="{{$data->type}}">
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
