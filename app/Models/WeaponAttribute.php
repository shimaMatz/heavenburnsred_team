<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeaponAttribute extends Model
{
    use HasFactory;

    protected $table = 'weapon_attributes';

    public function styles()
    {
        return $this->hasMany(Style::class);
    }
}
