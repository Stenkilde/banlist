<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    public function bans() {
        return $this->hasMany('App\Ban', 'case_id');
    }

    public function reason() {
        return $this->hasOne('App\Reason', 'id');
    }

    public function user() {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    protected $table = 'cases';
}
