<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{
    protected $fillable = [
        'ban_name', 'type', 'facebook_id', 'reason_id', 'img_src', 'user_id',
    ];

    public function reason() {
        return $this->hasOne('App\Reason', 'id');
    }

    public function user() {
        return $this->hasOne('App\User', 'id');
    }
}
