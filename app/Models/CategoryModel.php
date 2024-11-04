<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name'];

    public function articles()
    {
        return $this->hasMany(ArticlesModel::class, 'category_id', 'id');
    }
}