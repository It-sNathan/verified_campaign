@push('title')
<title>Manage Services | Verified Campaigns</title>
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
            <a href="{{route('admin.services')}}">
            <button type="button" class="btn btn-primary">Back</button></a>
        </div>        
        <div class="row mt-5">
            <div class="col-md-12 man-cat">
                <span class="success">{{session('message')}}</span>
                    <div class="card-body">
                        <form action="{{$url}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="service" class="control-label mb-1">Service Name</label>
                                <input id="service" name="service" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$services->service}}" required>
                                @error('service')
                                <span class="danger">
                                    {{$message}}
                                </span>    
                                @enderror
                            </div>
                            <div class="form-group has-success">
                                <label for="slug" class="control-label mb-1">Slug</label>
                                <input id="slug" name="slug" type="text" class="form-control cc-name valid" data-val="true"  aria-required="true" aria-invalid="false" value="{{$services->slug}}" required>
                                @error('slug')
                                <span class="danger">
                                    {{$message}}
                                </span>
                                @enderror                                
                            </div>
                            <div class="form-group has-success">
                                <label for="category_id" class="control-label mb-1">Category</label>
                                <select id="category_id" class="form-control" name="category_id" aria-label="Default select example">
                                    <option selected>Select Category</option>
                                    @foreach ($category as $cat)
                                        @if($services->category_id == $cat->id)
                                            <option selected value="{{$cat->id}}">    
                                        @else
                                            <option value="{{$cat->id}}">
                                        @endif
                                        {{$cat->category_name}}</option>
                                    @endforeach
                                    </select>
                                @error('category')
                                <span class="danger">
                                    {{$message}}
                                </span>
                                @enderror                                
                            </div>
                            <div class="form-group has-success">
                                <label for="rate_per1000" class="control-label mb-1">Rate Per 1000</label>
                                <input id="rate_per1000" name="rate_per1000" type="number" step="any" class="form-control cc-name valid" data-val="true"  aria-required="true" aria-invalid="false" value="{{$services->rate_per1000}}" required>
                                @error('rate_per1000')
                                <span class="danger">
                                    {{$message}}
                                </span>
                                @enderror                                
                            </div>
                            <div class="form-group has-success">
                                <label for="min_order" class="control-label mb-1">Min Order</label>
                                <input id="min_order" name="min_order" type="number" class="form-control cc-name valid" data-val="true"  aria-required="true" aria-invalid="false" value="{{$services->min_order}}" required>
                                @error('min_order')
                                <span class="danger">
                                    {{$message}}
                                </span>
                                @enderror                                
                            </div>
                            <div class="form-group has-success">
                                <label for="max_order" class="control-label mb-1">Max Order</label>
                                <input id="max_order" name="max_order" type="number" class="form-control cc-name valid" data-val="true"  aria-required="true" aria-invalid="false" value="{{$services->max_order}}" required>
                                @error('max_order')
                                <span class="danger">
                                    {{$message}}
                                </span>
                                @enderror                                
                            </div>
                            <div class="form-group has-success">
                                <label for="desc" class="control-label mb-1">Description</label>
                                <input id="desc" name="desc" type="text" class="form-control cc-name valid" data-val="true"  aria-required="true" aria-invalid="false" value="{{$services->desc}}" required>
                                @error('desc')
                                <span class="danger">
                                    {{$message}}
                                </span>
                                @enderror                                
                            </div>
                            <div class="form-group has-success">
                                <label for="keywords" class="control-label mb-1">Keywords</label>
                                <input id="keywords" name="keywords" type="text" class="form-control cc-name valid" data-val="true"  aria-required="true" aria-invalid="false" value="{{$services->keywords}}" required>
                                @error('keywords')
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