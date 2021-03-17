<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dress;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function products() {
        $data_dress = Dress::all();
        $data = [
            'dresses' => $data_dress
        ];
        return view('products', $data);
    }

    public function about() {
        return view('about');
    }
}
