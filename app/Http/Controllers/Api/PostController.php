<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    
    public function posts(){

        return Post::orderBy('id', 'DESC')->get();
    
    }

    public function getPost($id){

        return Post::find($id);

    }

    public function store(Request $request){

        try{

            $post = new Post;

            $post->path = $request->path;
            $post->caption  = $request->caption;
            $post->rating = $request->rating;
            $post->type = $request->type;
            $post->image_size = $request->image_size;
            $post->id_location = $request->id_location;
            $post->id_user = $request->id_user;
            $post->created_at = $request->created_at;

            $post->save();

            return ['insert' => 'ok'];

        }catch(\Exception $erro){

            return ['add' => 'erro'];
        }

    }

    public function update(Request $request,$id){

        try{

            $post = Post::find($id);

            $post->path = $request->path;
            $post->caption  = $request->caption;
            $post->rating = $request->rating;
            $post->type = $request->type;
            $post->image_size = $request->image_size;
            $post->id_location = $request->id_location;
            $post->id_user = $request->id_user;
            $post->created_at = $request->created_at;

            $post->save();

            return ['updated' => 'ok'];

        }catch(\Exception $erro){

            return ['updated' => 'erro'];
        }

    }


    public function delete($id){

        try{

            $post = Post::find($id);

            $post->delete();
            return ['delete' => 'ok'];

        }catch(\Exception $erro){
            return ['delete' => 'erro'];
        }
        
    }

    public function location($id){

        $posts = Post::where('id_location',$id)->get();

        return $posts;
    }


    public function recent(){

        return Post::orderBy('id', 'DESC')->first();

    }

    public function rating(){

        return Post::orderBy('id', 'DESC')->where('rating','5')->first();

    }


    public function userPosts($id){

        $posts = Post::where('id_user',$id)->get();

        return $posts;

    }



}
