@push('title')
<title>Register</title>
@endpush
@extends('backend.admin_login.layouts.main')
@section('main-container')
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="https://cdn.mypanel.link/m8x6dz/ayprqo756mmg8dj2.png" alt="verified-campaign.net">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{route('admin-register')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                    <span class="text-danger">
                                    @error('username')
                                        {{$message}}
                                    @enderror
                                    <span class="text-danger">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                    <span class="text-danger">
                                    @error('email')
                                        {{$message}}
                                    @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                    <span class="text-danger">
                                    @error('password')
                                        {{$message}}                                        
                                    @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation">
                                    <span class="text-danger">
                                    @error('confirm-password')
                                        {{$message}}
                                    @enderror
                                    </span>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="{{route('admin')}}">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection