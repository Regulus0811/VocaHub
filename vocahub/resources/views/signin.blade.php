<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/mypage/signin.css') }}">
    <title>Signin</title>
</head>
<body>
    @include('mainpage.header')
    <div class="signin-container">
        <form action="/signin/" method="post">
            @csrf
            <div class="form-group">
                <label for="id">아이디</label>
                <input type="text" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="password">비밀번호</label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="로그인">
        </form>
        <p class="signup-link" onclick="location.href='/signup'">아직 계정이 없으신가요?</p>
    </div>
    @include('mainpage.footer')
    @if (session('message'))
    <script>
        alert('{{ session('message') }}');
    </script>
    @endif
</body>
</html>
