<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategorieController extends Controller
{
    public function index(){
        $categorie = DB::SELECT("SELECT* FROM Catégorie") ;
        return View('catégorie.index',compact("categorie"));
    }

    public function create(){
        
    }
}
