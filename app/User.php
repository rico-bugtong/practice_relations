<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function address()
    {
        // return $this->hasOne('App\Address');
        // return $this->hasOne(Address::class,'uid','id');  fparam - model , sparam - foreign_key, tparam - local_key in the users table
        return $this->hasOne(Address::class); // select * FROM address WHERE user_id = *whatever the user_id// user concat id modal_name_concat_primary_key(id)
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
