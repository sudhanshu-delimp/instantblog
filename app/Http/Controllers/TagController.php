<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Image;

class TagController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin-area');
    }
    
    public function index()
    {
        $tags = Tag::where(['parent'=>0])->orderBy('id', 'DESC')
            ->paginate(30);

        return view('posts.tags', compact('tags'));
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store(Request $request)
    {
        $attributes = request(['title', 'name', 'parent', 'tag_media', 'on_home', 'color', 'desc']);

        $this->validate(request(), [
            'title' => Rule::unique('tags')->where(fn ($query) => $query->where(['title'=>$request->title,'parent'=>$request->parent])),
            'name' => 'required|max:25',
            'tag_media' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('tag_media')) {
            $postimage = $request->file('tag_media');
            $filename = time() . '.' . $postimage->getClientOriginalExtension();
            Image::make($postimage)->resize(400, 200)->save(public_path('/uploads/'. $filename));
            $attributes['tag_media'] = $filename;
        }
        if($request->has('on_home')){
            Tag::query()->update(['on_home'=>'0']);
        }
        Tag::create($attributes);

        session()->flash('message', 'Category Created!');
        return redirect('/cats');
    }

    public function show($id)
    {
        $tag = Tag::findOrFail($id);
        return view('tags.show', compact('tag'));
    }

    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('tags.edit', compact('tag'));
    }

    public function update(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);

        $attributes = request(['title', 'name', 'parent', 'tag_media', 'on_home', 'color', 'desc']);

        $this->validate(request(), [
            'title' => Rule::unique('tags')->where(fn ($query) => $query->where(['title'=>$request->title,'parent'=>$request->parent])->where('id','!=',$id)),
            'name' => [
                'required',
                'max:25',
                 Rule::unique('tags')->where(fn ($query) => $query->where(['title'=>$request->title])->where('id','!=',$id)),
            ],

            'tag_media' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('tag_media')) {
            $postimage = $request->file('tag_media');
            $filename = time() . '.' . $postimage->getClientOriginalExtension();
            Image::make($postimage)->resize(400, 200)->save(public_path('/uploads/'. $filename));
            $attributes['tag_media'] = $filename;
        } else {
            $attributes['tag_media'] = $tag->tag_media ;
        }

        if($request->has('on_home')) {
            Tag::where("id","!=", $id)->update(['on_home'=>'0']);
            $attributes['on_home'] = '1';
        } else {
            $attributes['on_home'] = '0';
        }
        
        $tag->update($attributes);

        session()->flash('message', 'Category Updated!');
        return redirect('/cats');
    }

    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        if(!empty($tag->tag_media)) {
            $filename = public_path().'/uploads/'.$tag->tag_media;
            $delete_success = \File::delete($filename);
        }
        $tag->posts()->detach();
        $tag->delete();
        session()->flash('message', 'Category Deleted!');
        return redirect('/cats');
    }
}