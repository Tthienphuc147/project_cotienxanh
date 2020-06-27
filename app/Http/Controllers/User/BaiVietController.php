<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class BaiVietController extends Controller
{

    public function getBaiViet($id_bai_viet){

			return view('user.pages.detail-post');
    }
}
