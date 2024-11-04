<?php

namespace App\View\Components;

use App\Models\ArticlesModel;
use App\Models\CategoryModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        $categories = CategoryModel::select("id", "name")->get();
        return view('components.navbar', [
            "categories" => $categories,
        ]);
    }
}

