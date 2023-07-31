<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

protected $fillable=[
  'blog_id','Tag','Tag'
];
    protected $casts = [
        'Tag' => 'array',
    ];

}
