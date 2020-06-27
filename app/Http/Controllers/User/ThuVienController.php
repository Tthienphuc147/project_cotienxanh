<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ThuVienController extends Controller
{

    public function show(){
        return view('user.pages.thuvien');
    }
    public function getAlbum($id){
        return view('user.pages.album');
    }
}
