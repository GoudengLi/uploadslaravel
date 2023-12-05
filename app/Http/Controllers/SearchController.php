<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $posts = Post::get()->filter(function ($post) use ($query) {
            $titleSimilarity = similar_text(mb_strtolower($query), mb_strtolower(substr($post->title, 0, 5)));
            return $titleSimilarity >= 3;
        });

        return view('search.index', ['posts' => $posts]);
    }
}
