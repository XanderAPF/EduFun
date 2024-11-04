<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticlesModel extends Model
{
    protected $table = 'articles';
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'category_id', 'id');
    }

    public function writer()
    {
        return $this->belongsTo(WritersModel::class, 'writer_id', 'id');
    }
}