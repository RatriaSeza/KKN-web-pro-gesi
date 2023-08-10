<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $news = News::active()->latest('published_date')->limit(3)->get();

        return view('index', [
            'news' => $news
        ]);
    }
}
