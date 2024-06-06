<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function getProductView()
    {
        return view('ProductManager');
    }
}
