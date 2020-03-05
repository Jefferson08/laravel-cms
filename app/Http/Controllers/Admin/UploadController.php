<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function upload(Request $request){

        $ext = $request->file->extension();
        $new_name = time().rand(0, 40).".".$ext;

        $request->file->move(public_path('media/images/'), $new_name);

        return [
            'location' => asset('media/images/'.$new_name)
        ];
    }

    public function upload_profile(Request $request)
    {

        $request->validate([
            'photo' => 'mimes:jpeg,png'
        ]);

        $id = $request->input('id');
        $photo = $request->file('photo');

        $ext = $photo->extension();
        $new_name = time().rand(0, 40).".".$ext;

        $photo->move(public_path('media/images/profile'), $new_name);

        $user = User::find($id);

        if($user->profile_photo != 'default.png'){
            if(file_exists(public_path('/media/images/profile/').$user->profile_photo)){
                unlink(public_path('/media/images/profile/').$user->profile_photo);
            }
        }

        $user->profile_photo = $new_name;
        $user->save();

        return [
            'location' => asset('media/images/profile/'.$new_name)
        ];
    }

    public function delete_img(Request $request)
    {

        $pieces = explode('/', $request->input('location'));

        if($request->filled('location')){
            if(file_exists(public_path('/media/images/').end($pieces))){
                unlink(public_path('/media/images/').end($pieces));
                return response('OK', 200);
            }
        }
        
        return response('', 200);
    }


}
