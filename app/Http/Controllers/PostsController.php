<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        //c1
        // $posts = DB::select('SELECT * FROM posts WHERE id=:id;', [
        //     'id' => 8
        // ]);

        //c2

        // $posts = DB::table('posts')->where('id', 7)->get();
        // dd($posts);

        return view('posts.index');
    }
}