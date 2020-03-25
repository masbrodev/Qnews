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

    public function addComment(Request $request){
    	$comment           = new Comment;
    	$comment->user_id  = Auth::user()->id;
    	$comment->post_id  = $request->id;
    	$comment->isi      = $request->komentar;
    	$comment->save();

    	$tgl   = Comment::where('user_id', Auth::User()->id)->orderBy('id', 'DESC')->limit(1)->first(); 
    	$date  = new DateTime($tgl->created_at);
        $month = array('Januari', 'Februari', 'Maret' , 'April' , 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
        $time  = $date->format('d')." ".$month[$date->format('m') - 1]." ".$date->format('Y')." ".$date->format("H:i:s"); 
    	return $time;
    }
}
