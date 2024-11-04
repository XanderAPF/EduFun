<?php

namespace App\Http\Controllers;

use App\Models\ArticlesModel;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
  public function show($id)
  {
    $article = ArticlesModel::where("id", $id)->first();
    return view("pages.article", [
      "title" => "Detail Article",
      "article" => $article,
    ]);
  }

  public function popular()
  {
    $articles = ArticlesModel::orderBy("total_views",'desc')->paginate(3);
    return view("pages.popular", [
      "title" => "Popular",
      "articles" => $articles,
    ]);
  }
}
