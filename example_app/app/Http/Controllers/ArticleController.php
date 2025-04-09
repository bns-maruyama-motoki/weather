<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function show()
    {
        $data = [
            'hello' => 'ハロー！',
        ];
        return view('article', $data);
    }
}
