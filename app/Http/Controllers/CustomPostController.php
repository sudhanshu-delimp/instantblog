<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;

class CustomPostController extends Controller{
    public function index(){
        $slider_posts = Post::latest()->take(5)->get();
        return view('public.custom.index',compact('slider_posts'));
    }
}
