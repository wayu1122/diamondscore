<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function base_runnings()
    {
        return $this->hasMany(base_running::class);
    }
}
    
