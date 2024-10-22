<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\comment;
use App\Models\video;
use App\Models\channels;

class subscription extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'channel_id'];

    // public function subscriber() {
    //     return $this->belongsTo(account::class, 'user_id');
    // }

}
