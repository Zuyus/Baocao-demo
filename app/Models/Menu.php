<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'en_name',
        'fr_name',
        'slug',
        'is_static',
        'url',
        'status',
    ];

    public function submenus()
    {
        return $this->hasMany(SubMenu::class, 'menu_id');
    }
}
