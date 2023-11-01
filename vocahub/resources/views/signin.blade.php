<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        <title>VocaHub</title>

    </head>
    <body>
        @include('mainpage.header')
        <div class="container">
            <div class="row align-items-center justify-content-center vh-100">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('로그인') }}</div>

                        <div class="card-body">
                            <form method="POST" action="/signin">
                                @csrf

                                <div class="form-group row">
                                    <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('아이디') }}</label>

                                    <div class="col-md-6">
                                        <input id="id" type="id" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="id" autofocus>

                                        @error('id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('비밀번호') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('로그인') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        아직 아이디가 없으신가요? <a href="/signup">회원가입</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
