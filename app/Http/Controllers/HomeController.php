<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data = [];

        $pages = Page::all();

        $data['pages'] = $pages;

        return view('home')->with($data);
    }

    public function contact()
    {
        return view('contact');
    }
}
