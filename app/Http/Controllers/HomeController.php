<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::with(['category', 'writer'])
            ->orderBy('created_at', 'desc')
            ->take(2)
            ->get();
            
        return view('home', compact('articles'));
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function popular()
    {
        $articles = Article::with(['category', 'writer'])
            ->orderBy('views', 'desc')
            ->paginate(3);
            
        return view('popular', compact('articles'));
    }
}
