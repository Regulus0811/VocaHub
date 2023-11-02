<header class="header-container">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    >
    <div class="nav-container">
        <nav class="navbar navbar-expand-lg rounded-3" style="background-color: #39c5bb;">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <img class="logo" src="{{asset('image/music.svg')}}" alt="logo">
                    <a class="navbar-brand" href="/">VocaHub</a>
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
                            <a class="nav-link active" aria-current="page" href="/signin">
                                로그인
                            </a>
                        </li>
                    </ul>

                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="검색" aria-label="Search">
                        <button class="btn btn-warning" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</header>

{{-- dropdown 의존성을 위한 jquery와 popper.js 주입 --}}
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
