<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request){

        $ext = $request->file->extension();
        $new_name = time().rand(0, 40).".".$ext;

        $request->file->move(public_path('media/images/'), $new_name);

        return [
            'location' => asset('media/images/'.$new_name)
        ];
    }
}
