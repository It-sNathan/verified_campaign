@push('title')
<title>Services | Verified Campaigns</title>
@endpush
@extends('backend.layouts.main')
@section('main-container')
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title text-center">Services</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-end mr-2">
            <a href="{{route('services.manage-services')}}">
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
                                <th>Service Name</th>
                                <th>Slug</th>
                                {{-- <th>Rate Per 1000</th>
                                <th>Min order</th>
                                <th>Max order</th>
                                <th>Description</th>
                                <th>Keywords</th> --}}
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $id = 1
                            @endphp                            
                            @foreach($result as $services)
                            <tr>
                                <td>{{$id++}}</td>
                                <td>{{$services->service}}</td>
                                <td>{{$services->slug}}</td>
                                {{-- <td>{{$services->rate_per1000}}</td>
                                <td>{{$services->min_order}}</td>
                                <td>{{$services->max_order}}</td>
                                <td>{{$services->desc}}</td>
                                <td>{{$services->keywords}}</td> --}}
                                <td>@if($services->status == '1')
                                    <a href="{{route('services.status', ['status' => '0', 'id' => $services->id])}}"><span class='badge badge-success'>Active</span></a>
                                @else
                                    <a href="{{route('services.status', ['status' => '1', 'id' => $services->id])}}"><span class='badge badge-danger'>InActive</span></a>
                                @endif</td>
                                <td>
                                    <a href="{{route('services.edit', ['id' => $services->id])}}"><button class="btn btn-success">Edit</button></a>
                                    <a href="{{route('services.delete', ['id' => $services->id])}}"><button class="btn btn-danger">Delete</button></a>
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