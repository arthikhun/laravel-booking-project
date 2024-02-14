@extends('layouts.app')
@section('title', 'Booking')
@section('head')
    <style>
        #intro {
            background-image: url({{ asset('images/shabumala.webp') }});
            height: 100vh;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #intro {
                margin-top: -58.59px;
            }
        }
    </style>
@endsection

@section('content')


    <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="container d-flex align-items-center justify-content-center text-center h-100">
                <div class="text-white" data-mdb-theme="dark">
                    <h1 class="mb-3">ร้านกินดีมีเฮง</h1>
                    <h5 class="mb-4">ร้านเปิด 9:00 - 20:00 หยุดทุกวันจันทร์<br><br>เบอร์ติดต่อ 087-654-3210</h5>
                    <a class="btn btn-outline-light btn-lg m-2" href="#section2">เมนู</a>
                    <a class="btn btn-outline-light btn-lg m-2" href="#section3">จองโต๊ะ</a>
                </div>
            </div>
        </div>
    </div>

    </header>

    <main>
        <div class="container">
            <!--Section: Content-->
            <section class="text-center" id='section2' style="padding-top: 6rem">
                <h4 class="mb-5"><strong>เมนู</strong></h4>

                <div class="row">
                    @foreach ($product as $item)
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card">
                                {{-- {{ $item->path_img }} --}}
                                <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                    <img src="{{ asset($item->path_img) }}" class="img-fluid" />
                                    <a href="#">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }}</h5>
                                    <p class="card-text">
                                        {{ $item->detail }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                                <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Button</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                                <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Button</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                                <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Button</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </section>
            <!--Section: Content-->

            <hr class="my-5" />

            <!--Section: Content-->
            <section class="py-5" style="background-color: #e9e9e9;">
                <h4 class="mb-5 text-center"><strong>จองโต๊ะ</strong></h4>

                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <form>
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row mb-3">
                                <div class="col">
                                    {{-- <div class="form-outline" data-mdb-input-init>
                                        <input type="text" id="form3Example1" class="form-control" />
                                        <label class="form-label" for="form3Example1">First name</label>
                                    </div> --}}
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">ชื่อลูกค้า</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">เบอร์ติดต่อ</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">จำนวนคน</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">วันที่</label>
                            </div>
                            {{-- <div class="form-outline mb-4" data-mdb-input-init>
                                <input type="email" id="form3Example3" class="form-control" />
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>

                            <div class="form-outline mb-4" data-mdb-input-init>
                                <input type="password" id="form3Example4" class="form-control" />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>

                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3"
                                    checked />
                                <label class="form-check-label" for="form2Example3">
                                    Subscribe to our newsletter
                                </label>
                            </div> --}}

                            <button type="submit" class="btn btn-primary btn-block mb-4" data-mdb-ripple-init>
                                จองโต๊ะ
                            </button>
                        </form>
                    </div>
                </div>
            </section>
            <!--Section: Content-->
        </div>
    </main>

    <footer class="bg-light text-lg-start">
        <div class="py-4 text-center">
            <a role="button" class="btn btn-primary btn-lg m-2" data-mdb-ripple-init
                href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow" target="_blank">
                Learn Bootstrap 5
            </a>
            <a role="button" class="btn btn-primary btn-lg m-2" data-mdb-ripple-init
                href="https://mdbootstrap.com/docs/standard/" target="_blank">
                Download MDB UI KIT
            </a>
        </div>

        <hr class="m-0" />

        <div class="text-center py-4 align-items-center">
            <p>Follow MDB on social media</p>
            <a href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" class="btn btn-primary m-1" role="button"
                data-mdb-ripple-init rel="nofollow" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="https://www.facebook.com/mdbootstrap" class="btn btn-primary m-1" role="button" rel="nofollow"
                data-mdb-ripple-init target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/MDBootstrap" class="btn btn-primary m-1" role="button" rel="nofollow"
                data-mdb-ripple-init target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://github.com/mdbootstrap/mdb-ui-kit" class="btn btn-primary m-1" role="button" rel="nofollow"
                data-mdb-ripple-init target="_blank">
                <i class="fab fa-github"></i>
            </a>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>

    @endsection

    @section('script')
    @endsection
