<?php
namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;

class IndexController extends Controller{

    public function index(){
        return view('homepage.index',['web_title'=>'御咖堂']);
    }
}