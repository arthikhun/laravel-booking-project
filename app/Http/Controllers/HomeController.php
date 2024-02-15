<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Booking_map_table;
use App\Models\Product;
use App\Models\Table_type;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['product1'] = Product::where('type', 1)->get();
        $data['product2'] = Product::where('type', 2)->get();
        $data['product3'] = Product::where('type', 3)->get();
        $data['product4'] = Product::where('type', 4)->get();
        $data['table'] = Table_type::all();
        // dd($data);
        return view('index', $data);
    }

    public function booking(Request $request)
    {
        // $datetime = $request->input('data.checkInDate') . ' ' . $request->input('data.checkInTime');
        $booking = new Booking();
        $booking->cus_name = $request->input('data.cusName');
        $booking->cus_phone = $request->input('data.cusPhone');
        $booking->checkin_date = Carbon::createFromFormat('d/m/Y H:i', $request->input('data.checkInDate') . ' ' . $request->input('data.checkInTime'));
        $booking->cus_amt = $request->input('data.cusAmt');
        $booking->booking_date = now();
        $booking->save();

        $check = Booking::where('cus_name', $request->input('data.cusName'))
            ->where('cus_phone', $request->input('data.cusPhone'))
            ->where('cus_amt', $request->input('data.cusAmt'))
            ->where('checkin_date', Carbon::createFromFormat('d/m/Y H:i', $request->input('data.checkInDate') . ' ' . $request->input('data.checkInTime')))
            ->select('id')->get();
        $mapTable = new Booking_map_table();

        foreach ($request->input('data.amtTable') as $index => $tableAmt) {
            if ($tableAmt != '') {
                $mapTable->booking_id = $check->id;
                $mapTable->table_type_id = $index + 1;
                $mapTable->table_amt = $tableAmt;
                $mapTable->save();
            }
        }



        return $request->all();
    }
    public function counter()
    {
        $data['booking'] = Booking::all();
        return view('counter', $data);
    }
}
