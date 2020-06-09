<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Comment;


class CommentController extends Controller
{
    public function comments(){

        return Comment::orderBy('id', 'DESC')->get();
    
    }

    public function getComment($id){

        return Comment::find($id);

    }

    public function post($id){

        $comments = Comment::where('id_post',$id)->get();

        return $comments;

    }

    public function store(Request $request){

        try{

            $comment = new Comment;

            $comment->comment = $request->comment;
            $comment->id_post  = $request->id_post;
            $comment->id_user = $request->id_user;
            
            $comment->save();

            return ['insert' => 'ok'];

        }catch(\Exception $erro){

            return ['add' => 'erro'];
        }

    }
}
