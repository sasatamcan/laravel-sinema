@extends('admin.layouts.admin')

@section('title', 'Update Films')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Update film</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/admin/films/update/{{$data->id}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text"  class="form-control" name="name" id="name" value="{{$data->name}}">
                            </div>

                            <div class="form-group">
                                <label for="url">Url</label>
                                <input type="text" class="form-control" name="url" id="url" value="{{$data->url}}">
                            </div>

                            <div class="form-group">
                                <label for="short_content">Short content</label>
                                <textarea id="short_content" class="form-control" name="short_content">{{$data->short_content}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea id="content" class="form-control" name="content">{{$data->content}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="year">Release date</label>
                                <input type="text" class="form-control" name="year" id="year" value="{{$data->year}}">
                            </div>

                            <div class="form-group">
                                <label for="trailer">Trailer link</label>
                                <input type="text" name="trailer" class="form-control" id="trailer" value="{{$data->trailer}}">
                            </div>

                            <div class="form-group">
                                <label for="film">Film link</label>
                                <input type="text" name="film" class="form-control" id="film" {{$data->film}}>
                            </div>

                            <div class="form-group">
                                <label for="actor">Actors</label>
                                <textarea id="actor" name="actor"  class="form-control">{{$data->actor}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="category_ids">Genre</label>
                                <select name="category_ids[]" id="category_ids" multiple  class="form-control">
                                    @php
                                        $category_ids = explode(',', $data->category_ids);
                                    @endphp
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"   @php if(in_array($category->id, $category_ids)) echo 'selected';  @endphp>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group-file-upload">
                                <div class="form-group-file-upload-wrap">
                                    <div class="form-group-file-upload-wrap-img">
                                        <img scr="{{$data->image}}" id="img_preview" alt="">
                                        <a href="#" id="img_delete">@lang('backend.delete')</a>
                                    </div>
                                    <div class="form-group-file-upload-wrap-input">
                                        <input type="file" name="image" id="img_fileUpload">
                                        <input type="hidden" name="imageHidden" id="img_fileValue" value="{{$data->image}}">
                                    </div>
                                </div>
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

