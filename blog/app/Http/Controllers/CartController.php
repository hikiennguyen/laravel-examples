<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return 'cart show';
    }

    public function add(Request $request) {
        return json_decode($request->getContent(), true);
    }
}
