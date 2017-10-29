<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    public function bans() {
        return $this->hasMany('App\Ban', 'case_id');
    }

    protected $table = 'cases';
}
