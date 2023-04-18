<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class News extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "category_id",
        "title",
        "text",
        "image",
    ];



    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tags::class,'tag_news');
    }
    //получаем категорию привзяанную к category_id
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
    //получаем пользователя привязанного к user_id
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // получить коментарии
    public function comments()
    {
        return $this->hasMany(Comments::class,'news_id');
    }





}
