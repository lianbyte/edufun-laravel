<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;
use App\Models\Article;

class WriterController extends Controller
{
    public function index()
    {
        $writers = Writer::all();
        return view('writers', compact('writers'));
    }
    
    public function show($id)
    {
        $writer = Writer::findOrFail($id);
        $articles = Article::with(['category', 'writer'])
            ->where('writer_id', $id)
            ->orderBy('created_at', 'desc')
            ->get();
            
        return view('writer', compact('writer', 'articles'));
    }
}
