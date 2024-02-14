<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>

    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    {{-- MDB --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <title>@yield('title')</title>
    @yield('head')
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fa-solid fa-store"></i>
                ร้านกินดีมีเฮง
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" datwa-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#intro">ข้อมูลร้าน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section2">เมนู</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section3">จองโต๊ะ</a>
                    </li>
                </ul>
                <div class="ms-auto">
                    <a class="nav-link" href="/counter">หน้าเค้าเตอร์</a>
                </div>
            </div>
        </div>
    </nav>
    <div style="padding-top:3.55rem">
        @yield('content')
    </div>

    <script>
        var scrollSpy = new bootstrap.ScrollSpy(document.body, {
            target: '#navbarNav'
        });
    </script>
    @yield('script')
</body>

</html>
