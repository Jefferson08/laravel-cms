<?php

namespace App\Http\Controllers;

use App\Page;
use App\User;
use App\Visitor;
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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        Visitor::create([
            'page' => 'home',
            'ip' => $request->ip(),
            'date_access' => now()
        ]);

        $data = [];

        $pages = Page::all();
        $users = User::all();

        $data['pages'] = $pages;
        $data['users'] = $users;

        return view('home')->with($data);
    }

    public function contact(Request $request)
    {
        Visitor::create([
            'page' => 'contact',
            'ip' => $request->ip(),
            'date_access' => now()
        ]);

        return view('contact');
    }
}
