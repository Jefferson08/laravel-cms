<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Page;
use App\User;
use App\Visitor;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $online_limit = date('Y-m-d H:i:s', strtotime('-5 minutes'));
        $online_list = Visitor::select('ip')->where('date_access', '>=', $online_limit)->groupBy('ip')->get();

        $visits = Visitor::selectRaw('page, count(page) as c')->groupBy('page')->get();

        $page_pie = [];
        $pagePieColors = [];

        foreach ($visits as $visit) {
            $page_pie[$visit->page] = intval($visit->c);
            $pagePieColors[] = 'rgba('.rand(0, 255).', '.rand(0, 255).', '.rand(0, 255).')';
        }

        $pagePieLabels = json_encode( array_keys($page_pie));
        $pagePieValues = json_encode( array_values($page_pie));
        $pagePieColors = json_encode( array_values($pagePieColors));

        $data = [
            'visitors_count' => Visitor::count(),
            'online_count' => count($online_list),
            'pages_count' => Page::count(),
            'users_count' => User::count(),
            'pagePieLabels' => $pagePieLabels,
            'pagePieValues' => $pagePieValues,
            'pagePieColors' => $pagePieColors
        ];

        return view('admin.index')->with($data);
    }
}
