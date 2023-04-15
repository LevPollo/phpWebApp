<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPermissions extends Model
{
    use HasFactory;

//    protected $table = "user_permissions";

    protected $fillable = [
        "user_id",
        "is_admin",
        "is_moderator",
        "is_author",
        "is_baned",
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
