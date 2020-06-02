<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    
    public function index(Request $request){

        $posts = Post::paginate(9);

        $array_posts = array('posts'=>$posts);

        return view ('tables/posts',$array_posts);

    }

    public function delete($id){

        $post = Post::find($id);
        $post->delete();
    
        
        return redirect('tables/posts');

    }
}
