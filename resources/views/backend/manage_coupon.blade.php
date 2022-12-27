@push('title')
<title>Manage Coupon | Verified Campaigns</title>
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
            <a href="{{route('admin.coupon')}}">
            <button type="button" class="btn btn-primary">Back</button></a>
        </div>        
        <div class="row mt-5">
            <div class="col-md-12 man-cat">
                <span class="success">{{session('message')}}</span>
                    <div class="card-body">
                        <form action="{{$url}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="category_name" class="control-label mb-1">Coupon Title</label>
                                <input id="title" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$coupon->title}}" required>
                                @error('title')
                                <span class="danger">
                                    {{$message}}
                                </span>    
                                @enderror
                            </div>
                            <div class="form-group has-success">
                                <label for="code" class="control-label mb-1">Coupon Code</label>
                                <input id="code" name="code" type="text" class="form-control cc-name valid" data-val="true"  aria-required="true" aria-invalid="false" value="{{$coupon->code}}" required>
                                @error('code')
                                <span class="danger">
                                    {{$message}}
                                </span>
                                @enderror                                
                            </div>
                            <div class="form-group has-success">
                                <label for="value" class="control-label mb-1">Coupon Value</label>
                                <input id="value" name="value" type="text" class="form-control cc-name valid" data-val="true"  aria-required="true" aria-invalid="false" value="{{$coupon->value}}" required>
                                @error('value')
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