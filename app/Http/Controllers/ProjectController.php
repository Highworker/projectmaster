<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Drink;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('drinks', [
            'title' => 'Dalee Projects',
            'page_title' => 'Projects',
            'heading' => 'List of Projects',
            'authUser' => Auth::user(),
            'requestPath' => Request::path(),
            'drinks' => Drink::with(['ingridients', 'comments'])->get()
        ]);
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function show($id): View|Factory|Application
    {
        return view('show', [
            'authUser' => Auth::user(),
            'requestPath' => Request::path(),
            'drink' => Drink::with(['ingridients', 'comments'])->find($id),
            'comments' => Comment::with(['user'])->find($id)
        ]);
    }
}
