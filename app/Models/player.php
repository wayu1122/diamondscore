<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    use HasFactory;

    public function player()
    {
        return $this->belongsTo('App\Models\player');
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
    
