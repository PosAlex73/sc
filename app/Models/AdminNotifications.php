<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminNotifications extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'message', 'status', 'type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
