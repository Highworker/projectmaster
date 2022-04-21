<?php

namespace App\Http\Controllers;

use App\Models\Ingridient;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\View\View;

class IngridientController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index() :View|Factory|Application
    {
        return view('ingridients', [
            'title' => 'Ingridients',
            'heading' => 'Most Popular Ingridients',
            'authUser' => Auth::user(),
            'requestPath' => Request::path(),
            'ingridients' => Ingridient::withCount('drinks')->orderBy('drinks_count', 'desc')->get()
        ]);
    }
}
