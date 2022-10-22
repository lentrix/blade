<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function products() {
        $products = [
            'Maggi Magic Sarap',
            'Datu Puti Vinegar',
            'Cobra Energy Drink',
            'Bear brand Swakto'
        ];

        return view('products',[
            'products' => $products
        ]);
    }
}
