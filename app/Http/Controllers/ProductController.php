<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $data = [
            'r1' => 'Gringo',
            'r2' => 'Oh My Gulay',
            'r3' => 'Canto',
            'r4' => 'Sage',
            'r5' => 'Amare de Cucina',
        ];

        return view('/toprestaurants', $data);
    }
}
