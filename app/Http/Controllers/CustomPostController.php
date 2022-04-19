<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;

class CustomPostController extends Controller{
    public function index(){
        $not_in_ids = $home_tag = $home_sub_tags= [];
        $slider_posts = Post::latest()->take(5)->get();
        if(!empty($slider_posts)){
            foreach($slider_posts as $key=>$slider_post){
                $not_in_ids[] = $slider_post->id;
            }
        }
        //$popular_posts = Post::orderBy('count', 'desc')->take(5)->get();
        $featured_posts = Post::where(['is_featured'=>1])->orderBy('id', 'desc')->take(2)->get();
        $home_tag = Tag::where(['id'=>1])->first();
        $home_sub_tags = Tag::where(['parent'=>$home_tag->id])->get();
        $popular_tags = Tag::orderBy('counter', 'desc')->take(4)->get();
        return view('public.custom.index',compact('slider_posts','home_tag','home_sub_tags','popular_tags','featured_posts'));
    }
}
