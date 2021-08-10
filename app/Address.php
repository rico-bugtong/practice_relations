<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['user_id', 'country'];

    // public function user() pwede wala na yung foreign_key.. pero pag ibang method name ginamit need specify yung FK
    public function user()
    {
        // return $this->belongsTo(User::class);
        return $this->belongsTo(User::class);
    }
}
