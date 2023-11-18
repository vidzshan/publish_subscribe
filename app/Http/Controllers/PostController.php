<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class PostController extends Controller
{

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);


        $message = new Message(); 
        $message->content = $request->input('content');
        $message->user_id = auth()->user()->id; 
        $message->save();

        return redirect()->route('home')->with('success', 'Message created successfully');
    }
    
}
