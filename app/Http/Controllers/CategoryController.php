<?php

namespace App\Http\Controllers;

use App\Models\ArticlesModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {
        $articles = ArticlesModel::where("category_id", $id)->get();
        $category = CategoryModel::where("id", $id)->first();
        return view('pages.category', [
            "title" => "Category",
            'articles' => $articles,
            "category" => $category,
        ]);
    }
}
