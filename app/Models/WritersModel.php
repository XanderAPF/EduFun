<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WritersModel extends Model
{
    protected $table = 'writers';
    protected $fillable = ['name','speciality','photo'];

    public function articles()
    {
        return $this->hasMany(ArticlesModel::class, 'writer_id', 'id');
    }
}