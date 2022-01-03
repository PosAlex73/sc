<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThreadMessages extends Model
{
    use HasFactory;

    protected $table = 'thread_messages';

    protected $fillable = [
        'thread_id', 'user_id', 'status', 'message',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }
}
