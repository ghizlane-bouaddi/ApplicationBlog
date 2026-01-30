<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        // $posts = DB::SELECT('SELECT * FROM posts');
        $posts = Post::all();
        return View("post.index", compact("posts"));
    }

        public function create(){
        return View("post.create");
    }

    public function store(Request $request){
        post::create([
            'titre' =>$request->titre,
            'contenu' =>$request->contenu,
            'image' =>$request->image,
            'categorie_id' =>$request->categorie_id,
        ]);

        return redirect('/posts');
    }

}
