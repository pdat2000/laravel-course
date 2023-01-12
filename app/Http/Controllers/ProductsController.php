<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        // $title = 'Dai hoc cong nghiep ha noi HAUI';
        // $x = 2;
        // $y = 3;

        // return view('products.index', compact('title', 'x', 'y'));
        // return view('products.index')->with('title', $title);

        $my_phone = [
            'name' => 'iphone 15',
            'year' => 2023
        ];
        print_r(route('products'));
        return view('products.index', ['my_phone' => $my_phone]);
    }

    public function detail($id)
    {
        return 'this is ' . $id;
    }
}