<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'unit_id',
        'seraphim_code',
        'seraph',
        'first_person',
        'birthday',
        'height',
        'birthplace',
        'voice_actor',
        'character_description',
    ];
}
