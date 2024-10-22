<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\comment;
use App\Models\account;
use App\Models\category;
class video extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'description', 'url', 'thumbnail', 'category_id', 'likes', 'dislikes'];

    // public function account() {
    //     return $this->belongsTo(account::class, 'user_id');
    // }

    // public function category() {
    //     return $this->belongsTo(category::class, 'user_id');
    
    // }

    // public function comments() {
    //     return $this->hasMany(comment::class, 'user_id');
    // }
}

