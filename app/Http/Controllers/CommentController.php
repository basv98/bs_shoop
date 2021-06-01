<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommetsRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(CommetsRequest $request)
    {
        Comment::create(
            ["user_id" => Auth()->user()->id] +
                $request->validated()
        );
        return redirect()->back()->with(["response" => "Comentario registrado con éxito"]);
    }
}
