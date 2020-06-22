<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('admin.users.profile')->with('user', $user);
    }

    public function save(Request $request, User $user)
    {
        $data = $request->only([
            'name',
            'email',
            'about',
            'password',
            'password_confirmation'
        ]);

        $validation = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'about' => ['required', 'string', 'max:255'],
        ];

        if($data['password']){
            $validation['password'] = ['required', 'string', 'min:8', 'confirmed'];
        }

        $validator = Validator::make($data, $validation);

        if($validator->fails()){
            return redirect()->route('painel.profile', $user)
            ->withErrors($validator);
        }

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->about = $data['about'];
        
        if($data['password']){
            $user->password = Hash::make($data['password']);
        }

        $user->save();

        return redirect()->route('painel.profile')->with('success', 'Dados alterados com sucesso!!!');
    }
}
