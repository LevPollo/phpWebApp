<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;
    // получить все посты с этим тэгом
    public function news()
    {
        return $this->morphedByMany(News::class,'tag_news');
    }

}
