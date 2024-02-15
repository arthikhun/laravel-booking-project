@extends('layouts.app')
@section('title', 'Booking')
@section('head')

@endsection

@section('content')
    @php
        $cardNo = 1;
    @endphp
    <div class="row mt-3">
        @foreach ($booking as $item)
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card" style="height: 22rem">
                    <div class="card-body">
                        <h5 class="card-title">รายการจอง {{ $cardNo++ }}</h5>
                        <p class="card-text">
                            ชื่อลูกค้า : {{ $item->cus_name }}<br>
                            เบอร์ติดต่อ : {{ $item->cus_phone }}<br>
                            จำนวนคน : {{ $item->cus_amt }} คน<br>
                            วันที่ต้องการจอง : {{ $item->checkin_date }}<br>
                            วันที่ทำการจอง : {{ $item->booking_date }}
                        </p>
                        <div class="card card-body">
                            @foreach ($item->mapTable as $subItem)
                                {{ $subItem->table->name }} จำนวน {{ $subItem['table_amt'] }} โต๊ะ<br>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection


@section('script')
    <script></script>
@endsection
