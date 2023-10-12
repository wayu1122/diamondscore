<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;

    public function team()
    {
        return $this->belongsTo('App\Models\team');
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
