<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    use HasFactory;

    protected $table = 'styles';

    protected $fillable = [
        'style_name',
        'rarity_id',
        'role_id',
        'weapon_attribute_id',
        'element_id',
        'passive_1',
        'passive_2',
        'passive_3',
        'character_id',
        'generated',
        'skill_id',
        'exclusive_skill_id',
    ];

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
