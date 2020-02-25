<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Setting;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:edit-users');
    }

    public function index()
    {
        return view('admin.pages.config');
    }

    public function save(Request $request)
    {
        $data = $request->only([
            'title',
            'subtitle',
            'description',
            'address',
            'phone',
            'email',
            'bg_color',
            'header_color'
        ]);

        $validator = $this->validator($data);


        if($validator->fails()){
            return redirect()->route('painel.settings')->withErrors($validator);
        }

        foreach ($data as $name => $content) {
            Setting::where('name', $name)->update([
                'content' => $content
            ]);
        }

        return redirect()->route('painel.settings')->with('success', 'Configurações alteradas com sucesso!!!');

    }

    public function validator($data)
    {
        return Validator::make($data, [
            'title' => ['required', 'string', 'max:100'],
            'subtitle' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:600'],
            'address' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'bg_color' => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/i'],
            'header_color' => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/i']
        ]);
    }
}
