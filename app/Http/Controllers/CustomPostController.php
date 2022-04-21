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
        $featured_posts = Post::where(['is_featured'=>1])->orderBy('id', 'desc')->take(2)->get();
        $home_tag = Tag::where(['on_home'=>'1'])->first();
        if(!empty($home_tag)){
            $home_sub_tags = Tag::where(['parent'=>$home_tag->id])->whereHas('posts')->get();
        }
        $popular_tags = Tag::orderBy('counter', 'desc')->take(4)->get();
        $trending_topics = Tag::where(['parent'=>'0'])->whereHas('posts')->get();
        $not_in_ids = implode(",",$not_in_ids);
        $rest_posts = Post::where(['post_live'=>1])
        ->whereNotIn('id',explode(",",$not_in_ids))
        ->orderBy('id','desc')
        ->take(5)
        ->get();
        $rest_post_count = $this->getRestPostCount();
        $existing_count = 0;
        return view('public.custom.index',compact('slider_posts','home_tag','home_sub_tags','popular_tags','featured_posts','trending_topics','rest_posts','rest_post_count','existing_count','not_in_ids'));
    }

    public function getRestPostCount(){
        return Post::where(['post_live'=>1])->count();
    }

    public function getRestPosts(Request $request){
        $responseData = [];
        $not_in_ids = $request->restrict_data;
        $existing_count = $request->existing_count;
        $last_id = $request->last_id;
        $rest_post_count = $this->getRestPostCount();
        $rest_posts = Post::where(['post_live'=>1])
        ->where("id","<",$last_id)
        ->whereNotIn('id',explode(",",$not_in_ids))
        ->orderBy('id','desc')
        ->take(5)
        ->get();
        $responseData['content'] = view('public.custom.rest_posts_section',compact('rest_posts','existing_count','rest_post_count','not_in_ids'))->render();
        return response()->json($responseData);
    }
}
