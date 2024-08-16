<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct()
    {
        
    }
    //hien thi danh sach(GET)
    public function index(){
        return view("CLients/Categories/list");
    }
    //lay ra mot chuyen muc theo id(GET)
    public function getCategory(){
        return view("CLients/Categories/edit");
    }

    //cap nhat mot chuyen muc(POST)
    public function updateCategory($id){
        return "summit sua chuyen muc: ".$id;
    }

    //show form them du lieu(GET)
    public function addCategory(){
        return view("CLients/Categories/add");

    }

    //them du lieu vao chuyen muc(POST)
    public function handleAddCategory(){
        return redirect(route("categories.add"));
       // return "them du lieu chuyen muc: ";
    }
    
    //xoa du lieu(DELETE)
    public function deleteCategory($id){
        return "summit xoa chuyen muc: " .$id;
    }
}
