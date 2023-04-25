@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 ">
<div class="card">
    <div class="card-header">
        <h3>
          Add Category
            <a href="{{ url('admin/category/create')}}" class="btn btn-primary btn-sm text-white float-end">Back</a>
        </h3>
    </div>
    <div class="card-body">

<form action="{{ url('admin/category')}}" method="POST" enctype="multipart/form-data">
@csrf

    <div class="row">

    <div class="col-md-6 mb-3">
<label for="">Name</label>
<input type="text"name="name" class="form-control" />
@error('name')
<small class="text-danger">{{$message}}</small>
@enderror
    </div>

    <div class="col-md-6 mb-3">
        <label for="">Slug</label></label>
        <input type="text"name="slug" class="form-control" />
        @error('slug')
<small class="text-danger">{{$message}}</small>
@enderror
            </div>
        </div>
            <div class="col-md-12 mb-3">
                <label for="">Description</label>
                <input type="text"name="description" class="form-control" />
                @error('description')
<small class="text-danger">{{$message}}</small>
@enderror
                    </div>

                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">image</label>
                        <input type="file"name="image" class="form-control" />
                        @error('image')
<small class="text-danger">{{$message}}</small>
@enderror
                            </div>


                <div class="col-md-6 mb-3">
                    <label for="">Status</label><br>
                    <input type="checkbox"name="status"  />
                    @error('status')
<small class="text-danger">{{$message}}</small>
@enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <h4>
                            SEO Tags
                        </h4>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for=""> Meta Title</label>
                        <input type="text"name="meta_title" class="form-control" />
                        @error('meta_title')
<small class="text-danger">{{$message}}</small>
@enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Meta Keyword</label>
                                <textarea name="meta_keyword" class="form-control" row="3" ></textarea>
                                @error('meta_keyword')
<small class="text-danger">{{$message}}</small>
@enderror
                                    </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Meta Description</label>
                                <textarea name="meta_description" class="form-control" row="3" ></textarea>
                                @error('meta_description')
<small class="text-danger">{{$message}}</small>
@enderror
                                    </div>


<div class="col-md-12 mb-3">
<button class="btn btn-primary text-white float-end" type="submit">Save</button>
</div>
</form>
    </div>
</div>


    </div>
</div>

@endsection
