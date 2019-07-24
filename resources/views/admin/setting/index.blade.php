@extends('admin.layouts.admin')

@section('title', trans('backend.settings'))

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">@lang('backend.settings')</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/admin/setting" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="sitename">@lang('backend.sitename')</label>
                                <input type="text"  class="form-control" name="sitename" id="sitename" value="{{$model->getSetting('sitename')}}">
                            </div>
                            <div class="form-group">
                                <label for="adminlanguage">@lang('backend.adminlanguage')</label>
                                <select name="adminlanguage" class="form-control" id="adminlanguage">
                                    <option value="ru" @php if($model->getSetting('adminlanguage')=='ru'){echo 'selected';} @endphp>ru</option>
                                    <option value="en" @php if($model->getSetting('adminlanguage')=='en'){echo 'selected';} @endphp>en</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">@lang('backend.email')</label>
                                <input type="text"  class="form-control" name="email" id="email"  value="{{$model->getSetting('email')}}">
                            </div>
                            <div class="form-group">
                                <label for="phone">@lang('backend.phone')</label>
                                <input type="text"  class="form-control" name="phone" id="phone"  value="{{$model->getSetting('phone')}}">
                            </div>


                            <div class="form-group">
                                <input type="submit" name="save" value="@lang('backend.save')" class="btn btn-success">
                            </div>
                        </form>


                    </div>
                </div>
            </div>
@endsection
