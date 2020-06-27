<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class LienHeController extends Controller
{

    public function show(){
			return view('user.pages.lien-he');
    }
}
