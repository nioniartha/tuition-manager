@extends('layout.authentication')
@section('title', 'Login')
@section('content')
@if(count($errors) > 0)
@foreach($errors->all() as $error) 
    <div data-notify="container" class="bootstrap-notify-container alert alert-dismissible bg-black animated fadeInDown" role="alert" data-notify-position="top-center" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; top: 20px; left: 0px; right: 0px;">
        <button type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button>
        <span data-notify="icon"></span> <span data-notify="title"></span> 
        <span data-notify="message">{{$error}}</span>
        <a href="#" target="_blank" data-notify="url"></a>
    </div>
@endforeach
@endif

<div class="row">
    <div class="col-lg-4 col-sm-12"  style="margin-top: 5%;">
        <form class="card auth_form" action = "/login" method = "POST">
        {{csrf_field()}}
            <div class="header">
                <img class="logo" src="{{asset('assets/images/logo.svg')}}" alt="">
                <h5>Log in</h5>
            </div>
            <div class="body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" name ="username" required>
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                    </div>
                    @if ($errors->has('username'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name ="password" required>
                    <div class="input-group-append">                                
                        <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                    </div>                            
                </div>
                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Sign In</button>
                <!-- <a href="{{route('dashboard.index')}}" class="btn btn-primary btn-block waves-effect waves-light">SIGN IN</a>                         -->
            </div>
        </form>
        <div class="copyright text-center">
            &copy;
            <script>document.write(new Date().getFullYear())</script>,
            <span>Nioni Artha Putri</a></span>
        </div>
    </div>
    <div class="col-lg-8 col-sm-12">
        <div class="card">
            <img src="{{asset('assets/images/signin.svg')}}" alt="Sign In"/>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('assets/plugins/bootstrap-notify/bootstrap-notify.js')}}"></script>
<script src="{{asset('assets/js/pages/ui/notifications.js')}}"></script>
@stop