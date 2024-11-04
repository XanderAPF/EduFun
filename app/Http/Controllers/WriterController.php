<?php

namespace App\Http\Controllers;

use App\Models\WritersModel;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {
        $writers = WritersModel::all();

        return view('pages.writer', [
            "title" => "Write",
            'writers' => $writers
        ]);
    }

    public function show($id)
    {
        $writer = WritersModel::findOrFail($id);
        $articles = $writer->articles;

        return view('pages.writer-show', [
            "title" => "Write Detail",
            'articles' => $articles,
            "writer" => $writer,
        ]);
    }
}
