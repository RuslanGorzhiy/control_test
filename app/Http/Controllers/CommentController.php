<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Comment;

class CommentController extends Controller
{
    public function index()
    {

        $res = Comment::orderBy('created_at', 'DESC')->paginate(5);
        return view('comment', ['comments' => $res]);
    }

    public function addcomment(Request $request)
    {
        if(!empty($request->name) and !empty($request->review)){
            Comment::create(['user' => $request->name, 'comment' => $request->review, 'created_at' => time(), 'updated_at'=>time()]);
        }

        $result = Comment::orderBy('created_at', 'DESC')->paginate(5);
        return view('comment', ['comments' => $result]);


    }
}

