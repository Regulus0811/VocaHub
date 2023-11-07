@include('mainpage.header')
<style>
    form {
    width: 50%;
    margin: 0 auto;
}
.container {
    max-width: 500px;
    margin: 0 auto;
}
</style>
<div class="container position-absolute top-50 start-50 translate-middle">
<div class="container">
    <link rel="stylesheet" href="{{ asset('resources/css/header.css') }}">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    >
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <label for="email">{{ __('이메일') }}</label>
            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password">{{ __('비밀번호') }}</label>
            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password"/>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="form-check">
            <input id="remember_me" class="form-check-input" type="checkbox" name="remember">
            <label class="form-check-label" for="remember_me">{{ __('로그인 정보 저장') }}</label>
        </div>

        <div class="mt-4 d-flex justify-content-between align-items-center">
            @if (Route::has('password.request'))
                <a class="text-decoration-none text-muted" href="{{ route('password.request') }}">
                    {{ __('비밀번호를 잊으셨나요?') }}
                </a>
            @endif
            <button type="submit" class="btn btn-primary">{{ __('로그인') }}</button>
        </div>

        <div class="mt-4 d-flex justify-content-end">
            <a class="text-decoration-none text-muted" href="{{ route('register') }}">
                {{ __('아직 회원이 아니신가요?') }}
            </a>
        </div>
    </form>
</div>
</div>

{{-- dropdown 의존성을 위한 jquery와 popper.js 주입 --}}
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

