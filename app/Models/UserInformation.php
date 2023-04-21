<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "first_name",
        "last_name",
        "birthdate",
        "avatar",
        "country",
        "city",
        "street",
        "house_number",
        "floor",
        "apartment_number",
        "index",

    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
