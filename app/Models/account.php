<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\comment;
use App\Models\video;
use App\Models\subscription;
use App\Models\channels;

class account extends Model
{
    use HasFactory, Notifiable;
    

    protected $fillable = ['username', 'email', 'password', 'profile_picture'];

    public function videos() {
        return $this->hasMany(video::class, 'user_id');
    }

    public function comments() {
        return $this->hasMany(comment::class, 'user_id');
    }

    public function subscriptions() {
        return $this->hasMany(subscription::class, 'user_id');
    }

}
