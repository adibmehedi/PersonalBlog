<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function index()
    {
        $posts=\App\Post::all();

        //return $posts;
        return view('index');
    }

    public function post(){
        return view('post');
    }
}
