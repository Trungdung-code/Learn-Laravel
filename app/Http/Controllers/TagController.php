<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show($id)
    {
        $tag = Tag::find($id);
        return view('tags.show', compact ('tag'));
    }
}
