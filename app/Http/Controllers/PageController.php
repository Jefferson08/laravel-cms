<?php

namespace App\Http\Controllers;

use App\Page;
use App\Visitor;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request, $slug){
        $page = Page::where('slug', $slug)->first();

        if($page){
            
            Visitor::create([
                'page' => $slug,
                'ip' => $request->ip(),
                'date_access' => now()
            ]);

            return view('page')->with('page', $page);
        } 

        return abort(404);
    }
}
