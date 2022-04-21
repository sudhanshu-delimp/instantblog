<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Tag;

class PublicTagController extends Controller
{
    public function index(Tag $tag)
    {
        $posts = $tag
        ->posts()
        ->orderBy('id', 'DESC')
        ->wherePostLive(1)
        ->paginate(30);
        if($tag->parent == 0){
            Tag::find($tag->id)->increment('counter');
        }
        return view('public.index', compact('posts', 'tag'));
    }

    public function tags()
    {
        return view('public.tags');
    }
}
