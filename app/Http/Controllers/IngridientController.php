<?php

namespace App\Http\Controllers;

use App\Models\Ingridient;
use Illuminate\Support\Facades\Request;

class IngridientController extends Controller
{
    public function index()
    {
        return view('ingridients', [
            'title' => 'Ingridients',
            'heading' => 'Most Popular Ingridients',
            'requestPath' => Request::path(),
            'ingridients' => Ingridient::withCount('drinks')->orderBy('drinks_count', 'desc')->get()
        ]);
    }
}
