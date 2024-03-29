<?php


namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        "email_verified_at",
        "remember_token"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function information()
    {
        return $this->hasOne(UserInformation::class);
    }

    public function permissions()
    {
        return $this->hasOne(UserPermissions::class);
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(UserSubscriptions::class);
    }

    public function donationSub()
    {
        return $this->hasMany(UserDonationSubscriptions::class);
    }


}
