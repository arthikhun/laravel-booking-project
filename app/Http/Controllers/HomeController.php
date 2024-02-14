<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['product'] = Product::all();
        // dd($data);
        return view('index', $data);
    }
}
