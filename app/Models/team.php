<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Dans votre modèle Team
public function team_type()
{
    return $this->belongsTo(Team_type::class, 'type_id');
}

}
