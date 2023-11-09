<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class base_running extends Model
{
    use HasFactory;

    public function player()
    {
        return $this->belongsTo(player::class, 'player_id');
    }

}
