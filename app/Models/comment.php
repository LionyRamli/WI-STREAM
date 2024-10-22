<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\account;
use App\Models\video;

class comment extends Model
{
    use HasFactory;

    protected $fillable = ['video_id', 'user_id', 'comment_text'];

    // public function video() {
    //     return $this->belongsTo(video::class);
    // }

    // public function account() {
    //     return $this->belongsTo(account::class, 'user_id');
    // }
}
