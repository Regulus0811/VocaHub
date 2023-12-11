<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="view
        port" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        <style>
            @import url("https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap");

.main-body {
    font-family: "Noto Sans KR", sans-serif;
    font-size: 1.2rem;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    background-color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

        </style>

        <title>VocaHub</title>

    </head>
    <body>
        @include('mainpage.header')
        <div class="main-body container">
            <div class="row align-items-center m-1">
                <div class="col-6 text-left">
                    <h2 class="page-intro">ようこそ、VocaHubへ!</h2>
                    <br>
                    <p class="page-intro-content">
                        VocaHub는 보컬로이드에 대한 정보를 제공하고,<br>
                        보컬로이드 음악을 추천해주는 커뮤니티 사이트입니다.<br>
                        새로운 굿즈, 일러스트, 음악, 정보 등을 공유하고,<br>
                        다른 사람들과 소통하며 즐거운 시간을 보내세요!
                    </p>
                </div>
                <div class="col-6">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/b2Di3kFGAUM?si=d0c6fnWLzBXQ7EeF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        @include('mainpage.footer')
    </body>
</html>
