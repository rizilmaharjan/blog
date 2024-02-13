<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagArticlesController extends Controller
{
    public function __invoke()
    {
        return view('tags.articles');
    }
}
