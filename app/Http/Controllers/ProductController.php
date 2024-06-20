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
            'r3' => 'Canto Bogchi Joint',
            'r4' => 'Great Wall Cafe',
            'r5' => 'Amare de Cucina',

            'p1' => 'SM Baguio',
            'p2' => 'Session Road',
            'p3' => 'Kisad',
            'p4' => 'Loakan',
            'p5' => '117 A R. Villalon St',
        ];

        return view('/toprestaurants', $data);
    }
}
