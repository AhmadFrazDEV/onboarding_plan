<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mtPosts;


class post_controller extends Controller
{
    public function show(){
        $posts = mtposts::all();

        return view('posts_dashoard' , compact('posts'));
    }
    public function destroy($id){
        $post = mtPosts::find($id);
        $post->delete();

        return redirect('/post');
    }
    public function edit($id){
        $post = mtPosts::findOrFail($id);
        return view('edit_view' , compact('post'));
    }
    public function update(Request $r , $id)
    {
        $post = mtPosts::findOrFail($id);
        $post->name = $r->name;
        $post->des = $r->des;
        $post->save();
        return redirect('/post');
    }
}
