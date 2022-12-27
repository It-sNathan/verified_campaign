@push('title')
<title>Manage Category | Verified Campaigns</title>
@endpush
@extends('backend.layouts.main')
@section('main-container')
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title text-center">{{$title}}</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-end mr-2">
            <a href="{{route('admin.category')}}">
            <button type="button" class="btn btn-primary">Back</button></a>
        </div>        
        <div class="row mt-5">
            <div class="col-md-12 man-cat">
                <span class="success">{{session('message')}}</span>
                    <div class="card-body">
                        <form action="{{$url}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="category_name" class="control-label mb-1">Category Name</label>
                                <input id="category_name" name="category_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$category->category_name}}" required>
                                @error('category_name')
                                <span class="danger">
                                    {{$message}}
                                </span>    
                                @enderror
                            </div>
                            <div class="form-group has-success">
                                <label for="category_slug" class="control-label mb-1">Category Slug</label>
                                <input id="category_slug" name="category_slug" type="text" class="form-control cc-name valid" data-val="true"  aria-required="true" aria-invalid="false" value="{{$category->category_slug}}" required>
                                @error('category_slug')
                                <span class="danger">
                                    {{$message}}
                                </span>
                                @enderror                                
                            </div>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
      </div>
</div>
@endsection