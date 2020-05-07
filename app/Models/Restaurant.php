<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Restaurant extends Model
{
    protected $guarded = [];

    public function owner()
     {
        return $this->belongsTo(User::class,'owner_id');
     }
}
