<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
class LssController extends Controller
{
    //
    public function index(){
        // $post = Post::orderBy('updated_at', 'DESC')->get();
        
        // return view('index', ['posts' => $post]);
        $post =Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('index', ['posts'=> $post]);
    }

    
    public function about(){
        // $post = Blog::orderBy('updated_at', 'DESC')->get();
        
        return view('about');
    }
     
    public function clubs(){
        // $post = Blog::orderBy('updated_at', 'DESC')->get();
        
        return view('clubs');
    }

    public function contributors(){
        return view('contributors');
    }
}
