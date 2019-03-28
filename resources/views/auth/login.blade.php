@extends('layouts.app')
@section('title','Sisteme Giriş')
@section('guestContent')
    <div class="auth-layout-wrap" style="background-image: url(/assets/images/photo-wide-4.jpg)">
        <div class="auth-content">
            <div class="card o-hidden">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-4">
                            <div class="auth-logo text-center mb-4">
                                <img src="/assets/images/logo.png" alt="">
                            </div>
                            <h1 class="mb-3 text-18">SİSTEME GİRİŞ YAP</h1>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group ">
                                    <label for="email">E-mail</label>
                                    <input id="email" class="form-control form-control-rounded {{ $errors->has('email') ? ' invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="password">Şifre</label>
                                    <input id="password" class="form-control form-control-rounded {{ $errors->has('password') ? ' invalid' : '' }}" type="password" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <button class="btn btn-rounded btn-primary btn-block mt-2">Giriş Yap</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
