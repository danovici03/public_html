{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
<main>
    <div class="bg_color_2">
        <div class="container margin_60_35">
            <div id="login-2">
                <h1>Login pagina personala Medisbok</h1>
                <form action="{{route('login')}}" method="post">
                    @if(Session::has('success'))
					<div class="alert alert-success">{{Session::get('success')}}</div>
					@endif
					@if(Session::has('fail'))
					<div class="alert alert-danger">{{Session::get('fail')}}</div>
					@endif
                    @csrf
                    <div class="box_form clearfix">
                        <div class="box_login last">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Adresa de email" value="{{old('email')}}">
                                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Parola ta" name="password" id="password" value="{{old('password')}}">
                                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                                <a href="#0" class="forgot"><small>Ai uitat parola?</small></a>
                            </div>
                            <div class="form-group">
                                <input class="btn_1" type="submit" value="Login">
                            </div>
                        </div>
                    </div>
                </form>
                <p class="text-center link_bright">Inca nu ai un cont? <a href="/registration"><strong>Inregistreaza-te acum!</strong></a></p>
            </div>
            <!-- /login -->
        </div>
    </div>
</main>
@endsection
<!-- /main -->