@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telp" class="col-md-4 col-form-label text-md-right">Telp</label>

                            <div class="col-md-6">
                                <input id="telp" type="text" class="form-control{{ $errors->has('telp') ? ' is-invalid' : '' }}" name="telp" value="{{ old('telp') }}" required autofocus>

                                @if ($errors->has('telp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gudep" class="col-md-4 col-form-label text-md-right">Gudep</label>

                            <div class="col-md-6">
                                <input id="gudep" type="text" class="form-control{{ $errors->has('gudep') ? ' is-invalid' : '' }}" name="gudep" value="{{ old('gudep') }}" required autofocus>

                                @if ($errors->has('gudep'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gudep') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat_gudep" class="col-md-4 col-form-label text-md-right">Alamat Gudep</label>

                            <div class="col-md-6">
                                <textarea id="alamat_gudep" type="textarea" class="form-control{{ $errors->has('alamat_gudep') ? ' is-invalid' : '' }}" name="alamat_gudep" value="{{ old('gudep') }}" required autofocus></textarea>

                                @if ($errors->has('alamat_gudep'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('alamat_gudep') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gudep" class="col-md-4 col-form-label text-md-right">Jabatan</label>

                            <div class="col-md-6">
                                <input id="jabatan" type="text" class="form-control{{ $errors->has('jabatan') ? ' is-invalid' : '' }}" name="jabatan" value="{{ old('jabatan') }}" required autofocus>

                                @if ($errors->has('gudep'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gudep') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('login') }}">
                                    Login
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
