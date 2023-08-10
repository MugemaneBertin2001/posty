<?php

namespace App\Http\Controllers;
use App\Models\Like;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function index(){
        $posts = Post::latest()->paginate(8);
        return view('posts.index',['posts'=>$posts,'active'=>'post']);
    }
    public function store(Request $request){
        $this->validate($request,[
            'body'=>'required',
        ]);
        $post = new Post();
        $post->body = $request->input('body');
        $post->user_id = auth()->id();
        $post->save();
        return redirect()->route('posts');
    }
    public function destroy(Post $post){
        $this->authorize('delete', $post);
        $post->delete();
        return back();
    }
}
