<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <title>Signup</title>
</head>
<body>
    @include('mainpage.header')
    <div class="signup-container">
        <form class="form-main" action="/signup" method="post">
            @csrf
            <div class="form-group">
                <label for="user_id">아이디</label>
                <div class="input-box">
                    <input type="text" id="user_id" name="user_id" required>
                    <button type="button" id="user_id_btn">중복체크</button>
                </div>
                <input type="hidden" id="user_id_check" value="0">
            </div>
            <div class="form-group">
                <label for="password">비밀번호</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="nickname">닉네임</label>
                <div class="input-box">
                    <input type="text" id="nickname" name="nickname" required>
                    <button type="button" id="nickname_btn">중복체크</button>
                </div>
                <input type="hidden" id="nickname_check" value="0">
            </div>
            <div class="form-group">
                <label for="birthday">생년월일</label>
                <input type="date" id="birthday" name="birthday" required onchange="checkAge()">
            </div>
            <input type="submit" value="회원가입">
        </form>
        <p class="signin-link" onclick="location.href='/signin'">로그인 화면으로 돌아가기</p>
    </div>
    @include('mainpage.footer')
    <script type="module" src="{{ asset('js/service/signup/index.js') }}"></script>
    <script type="module" src="{{ asset('js/signup/index.js') }}"></script>
</body>
</html>
