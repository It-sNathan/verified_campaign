@push('title')
<title>Dashboard | Verified Campaigns</title>
@endpush
@extends('backend.layouts.main')
@section('main-container')
<!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-2">
                    @foreach ($admin as $adm)
                    <h1 class="page-title text-center">Welcome <span class="dash_usr">{{$adm->username}}</span></h1>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTAINER-->
</div>
@endsection