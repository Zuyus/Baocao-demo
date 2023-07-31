<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=[
        'Small_Image',
        'Big_Image',
        'en_Title',
        'fr_Title',
        'en_Description_One',
        'fr_Description_One',
        'en_Description_Two',
        'fr_Description_Two',
        'user_id'
    ];
    protected $guarded = [];
    public function tags()
    {
        return $this->hasMany(Tag::class, 'blog_id');
    }
    public function comments()
    {
        return $this->hasMany(\App\Models\Admin\BlogComment::class,'Blog_Id')->with('replies')->where('Parent_Id', 0);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
