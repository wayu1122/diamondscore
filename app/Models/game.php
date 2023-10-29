<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    use HasFactory;

    public function innings()
    {
        return $this->hasMany(Inning::class);
    }
    
    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'bat_first_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'field_first_id');
    }

}