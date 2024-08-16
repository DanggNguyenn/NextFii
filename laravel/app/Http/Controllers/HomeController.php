<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Action index()
    public function index(){
        return view("home");
    }

    //Action getNews
    public function getNews(){
        return 'danh sach tin tuc';
    }

    public function getCatrgories($id){
        return 'chuyên mục: '.$id;
    }
}

