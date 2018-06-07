<?php
namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;

class IndexController extends Controller{

    public function index(){
        return view('mobile.index',['content'=>'Mobile Homepage']);
    }
}