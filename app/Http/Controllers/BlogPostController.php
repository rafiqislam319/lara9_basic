<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\Comment;

class BlogPostController extends Controller
{
    public function index(){

        // $comments = BlogPost::find(5)->comment;
        // return response()->json($comments);

        $data = BlogPost::with('comments')->get();
        //return response()->json($data);

        return view ('backend.orm.one2many', compact('data'));
    }
}
