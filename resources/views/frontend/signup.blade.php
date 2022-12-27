@extends('frontend.layouts.main')
@section('main-container')
<section id="signup-sec">
    <div class="container">
        <div class="row signup-row">
            <div class="col-md-6">
                <img src="{{url('frontend/img/heart.png')}}" alt="Heart Image" class="img-responsive heart-img">
                <img src="{{url('frontend/img/staff.png')}}" alt="Team Image" class="img-responsive staff-img">
            </div>
            <div class="col-md-6">
                <div class="signup-frm-box">
                    <h3 class="signup-frm-title">Enter Your Details</h3>
                    {{-- <form action="" method="post"> --}}
                    {!! Form::open([
                        'url' => '',
                        'method' => 'post'
                    ]) !!}
                    {{-- @csrf --}}
                    <div class="form-group">
                    <label for="login" class="control-label">Username</label>
                    {{-- <input type="text" class="form-control" id="login" value="" name="RegistrationForm[login]"> --}}
                    {!! Form::text('RegistrationForm[login]', '',[
                        'class' => "form-control", 'id' => "login"
                    ]) !!}
                    </div>
                    <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    {{-- <input type="email" class="form-control" id="email" value="" name="RegistrationForm[email]"> --}}
                    {!! Form::email('RegistrationForm[email]', '',[
                        'class' => "form-control", 'id' => "email"
                    ]) !!}
                    </div>
                    <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    {{-- <input type="password" class="form-control" id="password" value="" name="RegistrationForm[password]"> --}}
                    {!! Form::password('RegistrationForm[password]', [
                        'class' => "form-control", 'id' => "password"
                    ]) !!}
                    </div>
                    <div class="form-group">
                    <label for="password_again" class="control-label">Confirm password</label>
                    {{-- <input type="password" class="form-control" id="password_again" value="" name="RegistrationForm [password_again]"> --}}
                    {!! Form::password('RegistrationForm[password_again]',[
                        'class' => "form-control", 'id' => "password_again"
                    ]) !!}
                    </div>
                    {{-- Captcha Section for Later use --}}
                    <button type="submit" class="btn btn-secondary icon-btn">
                    <span class="icon-btn-icon"><i class="fas fa-user-circle"></i></span>
                    <span class="icon-btn-txt">Sign up</span>
                    </button>
                    <div class="have-acc">Already have an account? <a href="/">Sign in</a></div>
                    {{-- </form> --}}
                    {!! Form::close() !!}
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection