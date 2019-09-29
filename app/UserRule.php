<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRule extends Model
{

    public function users() {
        return $this->belongsToMany(User::class);
    }
}
