<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    use HasFactory;

    protected $table = 'styles';

    public function rarity()
    {
        return $this->belongsTo(Rarity::class);
    }

    public function weapon_attribute()
    {
        return $this->belongsTo(WeaponAttribute::class);
    }

    public function element()
    {
        return $this->belongsTo(Element::class);
    }

    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}
