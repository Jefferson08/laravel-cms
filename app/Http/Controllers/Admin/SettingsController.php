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
    }

    public function index()
    {
        $settings = Setting::get();

        $formatted_settings = [];

        foreach ($settings as $setting) {
            $formatted_settings[$setting['name']] = $setting['content'];
        }

        return view('admin.pages.config')->with('settings', $formatted_settings);
    }

    public function save(Request $request)
    {
        $data = $request->only([
            'title',
            'subtitle',
            'email',
            'bg_color',
            'text_color'
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
            'email' => ['required', 'string', 'email', 'max:255'],
            'text_color' => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/i'],
            'text_color' => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/i']
        ]);
    }
}
