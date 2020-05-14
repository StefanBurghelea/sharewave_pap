<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment; 

class CommentController extends Controller
{
    public function index(Request $request){

        $comment = Comment::paginate(9);

        $array_comments = array('comments'=>$comment);

        return view ('tables/comments',$array_comments);
    }
}
