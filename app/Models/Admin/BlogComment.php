<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;
    protected $fillable = [
        'Blog_Id',
        'User_Id',
        'Name',
        'Email',
        'Comment',
        'is_reply',
        'Parent_Id',
        'active_status',
    ];

    public function replies()
    {
        return $this->hasMany(BlogComment::class,'Parent_Id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'User_Id', 'id');
    }
}
