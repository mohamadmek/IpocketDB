<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saving_goal extends Model
{
    protected $fillable = [
        'title', 'start_date', 'end_date', 'interval', 'ai', 'users_id', 'currencies_id'
    ];
}
