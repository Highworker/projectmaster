<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use App\Models\Ingridient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerDrinks extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('drinks', [
            'title' => 'Our Drink Menu',
            'page_title' => 'Drinks',
            'heading' => 'List of Drink recipes with Ingridients to make',
            'drinks' => Drink::with(['ingridients'])->get()
        ]);
    }
    public function show($id){
        dump($id);
    }

}
