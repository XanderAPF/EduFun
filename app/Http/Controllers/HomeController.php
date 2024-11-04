<?php

namespace App\Http\Controllers;

use App\Models\ArticlesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $articles = ArticlesModel::select('articles.*')
            ->join(
                DB::raw('(SELECT category_id, MAX(total_views) as max_views FROM articles GROUP BY category_id) as grouped_articles'),
                function ($join) {
                    $join->on('articles.category_id', '=', 'grouped_articles.category_id')
                        ->on('articles.total_views', '=', 'grouped_articles.max_views');
                }
            )
            ->get();
        return view('pages.home', [
            "title" => "Home",
            'articles' => $articles
        ]);
    }
}
