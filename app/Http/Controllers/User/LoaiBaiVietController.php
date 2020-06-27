<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class LoaiBaiVietController extends Controller
{

    public function getLoaiBaiViet($id_loai_bai_viet){
			return view('user.pages.category');
    }
}
