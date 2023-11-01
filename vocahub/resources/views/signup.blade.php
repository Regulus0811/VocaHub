<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        <title>VocaHub</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    </head>
    <body>
        @include('mainpage.header')
        <div class="container">
            <div class="row align-items-center justify-content-center vh-100">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('회원가입') }}</div>

                        <div class="card-body">
                            <form method="POST" action="/signup">
                                @csrf

                                <div class="form-group row">
                                    <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('아이디 ') }}</label>

                                    <div class="col-md-6">
                                        <input id="id" type="text" class="form-control" name="id" required autocomplete="id" autofocus>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" id="id-check" class="btn btn-primary">중복검사</button>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('비밀번호') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nickname" class="col-md-4 col-form-label text-md-right">{{ __('닉네임') }}</label>

                                    <div class="col-md-6">
                                        <input id="nickname" type="text" class="form-control" name="nickname" required autocomplete="nickname" autofocus>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" id="nickname-check" class="btn btn-primary">중복검사</button>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="module" src="{{asset('js/service/signup/index.js')}}">
        <script type="module" src="{{ asset('js/signup/index.js') }}"></script>
        </script>
    </body>
</html>
