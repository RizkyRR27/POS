<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($category)
    {
        return view('produk', ['category' => $category]);
    }
}
