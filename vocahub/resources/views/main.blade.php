<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="view
        port" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

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
                        VocaHub은 보컬로이드에 대한 정보를 제공하고,<br>
                        보컬로이드 음악을 추천해주는 커뮤니티 사이트입니다.<br>
                        새로운 굿즈, 일러스트, 음악, 정보 등을 공유하고,<br>
                        다른 사람들과 소통하며 즐거운 시간을 보내세요!
                    </p>
                </div>
                <div class="col-6">
                    <img src="{{asset('https://pjsekai.sega.jp/3rd/assets/webp/common/gallery/illustration/img_illust_30.webp')}}"
                         alt="main_image"
                         class="img-fluid rounded-3">
                </div>
            </div>
        </div>
        @include('mainpage.footer')
    </body>
</html>
