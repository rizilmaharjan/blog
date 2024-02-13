<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleDetailController extends Controller
{
    public function __invoke()
    {
        $data = [];
        return view('articles.show', $data);
    }
}
