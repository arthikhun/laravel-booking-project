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
    <header>
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

                <h4 class="mb-5"><strong>เมนูบุฟเฟ่ต์</strong></h4>
                {{-- <div class="row">
                    @foreach ($product as $item)
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card">
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
                </div> --}}

                <div class="row row-cols-1 row-cols-md-3 g-4 pb-5">
                    @foreach ($product1 as $item)
                        <div class="col">
                            <div class="card">
                                <div
                                    style="background-image: url({{ asset($item->path_img) }});height:400px;background-position:center;background-size: cover;">
                                </div>
                                {{-- <img src="{{ asset($item->path_img) }}" class="card-img-top" alt="..."> --}}
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }} ราคา {{ $item->price }} บาท</h5>
                                    <p class="card-text"> {{ $item->detail }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <h4 class="my-5"><strong>เมนูของหวาน</strong></h4>

                <div class="row row-cols-1 row-cols-md-3 g-4 pb-5">
                    @foreach ($product2 as $item)
                        <div class="col">
                            <div class="card">
                                <div
                                    style="background-image: url({{ asset($item->path_img) }});height:400px;background-position:center;background-size: cover;">
                                </div>
                                {{-- <img src="{{ asset($item->path_img) }}" class="card-img-top" alt="..."> --}}
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }} ราคา {{ $item->price }} บาท</h5>
                                    <p class="card-text"> {{ $item->detail }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <h4 class="my-5"><strong>เมนูเครื่องดื่ม</strong></h4>

                <div class="row row-cols-1 row-cols-md-3 g-4 pb-5">
                    @foreach ($product3 as $item)
                        <div class="col">
                            <div class="card">
                                <div
                                    style="background-image: url({{ asset($item->path_img) }});height:400px;background-position:center;background-size: cover;">
                                </div>
                                {{-- <img src="{{ asset($item->path_img) }}" class="card-img-top" alt="..."> --}}
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }} ราคา {{ $item->price }} บาท</h5>
                                    <p class="card-text"> {{ $item->detail }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <h4 class="my-5"><strong>เมนู a la carte</strong></h4>

                <div class="row row-cols-1 row-cols-md-3 g-4 pb-5">
                    @foreach ($product4 as $item)
                        <div class="col">
                            <div class="card">
                                <div
                                    style="background-image: url({{ asset($item->path_img) }});height:400px;background-position:center;background-size: cover;">
                                </div>
                                {{-- <img src="{{ asset($item->path_img) }}" class="card-img-top" alt="..."> --}}
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }} ราคา {{ $item->price }} บาท</h5>
                                    <p class="card-text"> {{ $item->detail }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </section>

            <hr class="my-5" />

            <section id="section3" class="py-5" style="background-color: #e9e9e9;">
                <h4 class="mb-5 text-center"><strong>จองโต๊ะ</strong></h4>

                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <form>
                            {{-- <div class="row mb-3">
                                <div class="col">
                                    <div class="form-outline" data-mdb-input-init>
                                        <input type="text" id="form3Example1" class="form-control" />
                                        <label class="form-label" for="form3Example1">First name</label>
                                    </div>
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
                            </div> --}}
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="cus-name" placeholder="customer name"
                                    required>
                                <label for="cus-name">ชื่อลูกค้า</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="tel" id="cus-phone" pattern="[0-9]{10}"
                                    placeholder="cus phone" required>
                                <label for="cus-phone">เบอร์ติดต่อ</label>
                            </div>
                            {{-- <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="cus-amt" placeholder="cus amt">
                                <label for="cus-amt">จำนวนคน</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="checkin-date" placeholder="dd-mm-yyyy">
                                <label for="floatingInput">วันที่ต้องการจอง</label>
                            </div> --}}
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="checkin-date"
                                            placeholder="dd-mm-yyyy">
                                        <label for="checkin-date">วันที่ต้องการจอง</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="time" class="form-control" id="checkin-time" placeholder="time">
                                        <label for="checkin-time">เวลาที่ต้องการจอง</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="cus-amt" placeholder="cus amt"
                                            required>
                                        <label for="cus-amt">จำนวนคน</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                @foreach ($table as $item)
                                    <div class="col">
                                        <label for="table{{ $item->id }}">{{ $item->name }}
                                            (สูงสุด {{ $item->max_person }} คน/โต๊ะ)
                                        </label>
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="table{{ $item->id }}"
                                                placeholder="tabletype">
                                            <input type="hidden" name="" value="{{ $item->max_person }}">
                                            <label for="table{{ $item->id }}">จำนวนโต๊ะ</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div id='error' style="font-size: 1rem;
                            color: #dc4c64;">
                                โปรดเลือกโต๊ะให้เพียงพอตอจำนวนคน
                            </div>
                            <button type="submit" class="btn btn-primary btn-block my-4 p-3">
                                จองโต๊ะ
                            </button>
                        </form>
                    </div>
                </div>

            </section>

        </div>
    </main>

    {{-- <footer class="bg-light text-lg-start">
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
     --}}

    <footer class="bg-light text-lg-start mt-4">
        <hr class="m-0" />
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <a class="text-dark" href="/">กินดีมีเฮง</a>
        </div>
    </footer>
@endsection


@section('script')
    <script>
        function handleDatepicker(elementId, setDate = null) { // add datepicker to element
            if (setDate == null) {
                setDate = new Date()
            }
            // console.log(setDate);
            $(elementId).datepicker({
                dateFormat: 'dd/mm/yy',
                changeMonth: true,
                changeYear: true,
                isBuddhist: true,
                monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม',
                    'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
                ],
                monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.',
                    'ต.ค.', 'พ.ย.', 'ธ.ค.'
                ],
                dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
                dayNamesShort: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
                dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.']
                // yearRange: "-20:5"
            });
            // setting animation
            $(elementId).datepicker("option", "showAnim", "blind");
            // set default date = current date
            $(elementId).datepicker("setDate", setDate);


        }
        handleDatepicker('#checkin-date');

        $(document).ready(function() {
            $('#error').hide();
            $('form').submit(function(e) {
                var cusAmt = $('#cus-amt').val()
                var table1 = $('#table1').val()
                var table2 = $('#table2').val()
                var table3 = $('#table3').val()
                var totalTable = (table1 * 1) + (table2 * 4) + (table3 * 6)
                console.log(cusAmt, totalTable);
                if (totalTable >= cusAmt) {
                    $('#error').hide();
                    var data = {
                        cusName: $('#cus-name').val(),
                        cusPhone: $('#cus-phone').val(),
                        checkInDate: $('#checkin-date').val(),
                        checkInTime: $('#checkin-time').val(),
                        cusAmt: $('#cus-amt').val(),
                        amtTable: [table1, table2, table3],
                    }
                    console.log(data);
                    // console.log($('#checkin-date').val());
                    // console.log($('#checkin-time').val());
                    $.ajax({
                        type: 'POST',
                        url: '/booking',
                        data: {
                            '_token': '{{ csrf_token() }}',
                            'data': data,
                        },
                        success: function(response) {
                            // Handle success, if needed
                            // $("#error").html(error);
                            // console.log(response);
                            location.href = '{{ url('/counter') }}';
                        },
                        error: function(error) {
                            // Handle error, if needed
                            // console.error('Error, Select company failed');
                            // console.log(error.responseJSON.message);
                        }
                    });
                } else {
                    console.log('inelse');
                    $('#error').show();
                }

            });

        });
    </script>
@endsection
