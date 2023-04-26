<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDonationSubscriptions extends Model
{
    use HasFactory;

    protected $table = "donation_subscriptions";

    protected $fillable = [
        "user_id",
        "author_id",
    ];
    public function user()
    {
        return $this->hasMany(User::class);
    }

}
