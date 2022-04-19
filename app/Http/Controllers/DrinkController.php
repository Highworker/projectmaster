<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class DrinkController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('drinks', [
            'title' => 'Our Drink Menu',
            'page_title' => 'Drinks',
            'heading' => 'List of Drink recipes with Ingridients to make',
            'drinks' => Drink::with(['ingridients'])->get()
        ]);
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function show($id): View|Factory|Application
    {
        return view('show', [
            'drink' => Drink::with(['ingridients'])->find($id)
        ]);
    }
}
