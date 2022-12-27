@push('title')
<title>Category | Verified Campaigns</title>
@endpush
@extends('backend.layouts.main')
@section('main-container')
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title text-center">Category</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-end mr-2">
            <a href="{{route('category.manage-category')}}">
            <button type="button" class="btn btn-primary">ADD</button></a>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <span class="success">{{session('message')}}</span>
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Category Slug</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $id = 1
                            @endphp                            
                            @foreach($result as $category)
                            <tr>
                                <td>{{$id++}}</td>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->category_slug}}</td>
                                <td>@if($category->status == '1')
                                    <a href="{{route('category.status', ['status' => '0', 'id' => $category->id])}}"><span class='badge badge-success'>Active</span></a>
                                @else
                                    <a href="{{route('category.status', ['status' => '1', 'id' => $category->id])}}"><span class='badge badge-danger'>InActive</span></a>
                                @endif</td>
                                <td>
                                    <a href="{{route('category.edit', ['id' => $category->id])}}"><button class="btn btn-success">Edit</button></a>
                                    <a href="{{route('category.delete', ['id' => $category->id])}}"><button class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>
    </div>
</div>
@endsection