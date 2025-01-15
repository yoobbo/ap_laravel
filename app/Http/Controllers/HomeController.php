<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = Post::orderBy('id', 'desc')->get();
        // dd() dump and die
        return view("home",compact("data"));
    }
}
