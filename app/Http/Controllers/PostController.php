<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Project;

class PostController extends Controller
{
    public function index(){
        return view('resume', [
            "title" => "Resume | Rizkyard",
            "posts" => Post::with(['category', 'user'])->latest()->get(),
            "education" => Education::all()
        ]);
    }

    public function show(Post $tampil){
        return view('post', [
            "title" => 'Single Post',
            "post" => $tampil
        ]);
    }
}
