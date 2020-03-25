<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\User;
use App\Like;
use DateTime;
use App\Comment;
use App\Notification;
use Illuminate\Http\Request;
date_default_timezone_set("Asia/Jakarta");

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function userInfo(){
    	$id    = Auth::user()->id;
    	$datas = User::where('id', $id)->first();
   
  		return $datas;
    }
}
