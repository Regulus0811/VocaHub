<header class="header-container">
    <link rel="stylesheet" href="{{ asset('resources/css/header.css') }}">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    >
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap");

header {
    font-family: "Noto Sans KR", sans-serif;
    font-size: 1.2rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
}

        .navbar {
            background-color: #39c5bb !important;
        }
        </style>
   <nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <img class="logo" src="{{asset('image/music.svg')}}" alt="logo">
    <a class="navbar-brand" href="/">VocaHub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" data-bs-backdrop="false">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">VocaHub</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-3">
                        <a class="nav-link active" aria-current="page" href="/">홈페이지 소개</a>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            정보
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/">굿즈</a></li>
                            <li><a class="dropdown-item" href="/">보카로P</a></li>
                            <li><a class="dropdown-item" href="/">악곡</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link active" aria-current="page" href="/suggest">
                            추천곡
                        </a>
                    </li>
                    <li class="nav-item dropdown me-3">
                        @guest
                        <a class="nav-link active" aria-current="page" href="/login">
                            로그인
                        </a>
                        @endguest
                        @auth
                        <a class="nav-link active" aria-current="page" href="/logout">
                            로그아웃
                        </a>
                        @endauth
                    </li>

                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="검색" aria-label="Search">
                    <button class="btn btn-warning" type="submit">Search</button>
                </form>
            </div>
          </div>
        </div>
      </nav>
</header>

{{-- dropdown 의존성을 위한 jquery와 popper.js 주입 --}}
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


