<?php

namespace App\Http\Controllers;

use App\Models\Ingridient;

class IngridientController extends Controller
{
    public function index()
    {
        return view('ingridients', [
            'title' => 'Ingridients',
            'heading' => 'Most Popular Ingridients',
            'ingridients' => Ingridient::withCount('drinks')->orderBy('drinks_count', 'desc')->get()
        ]);
    }
}
