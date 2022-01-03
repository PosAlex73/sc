<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'message', 'group_id',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
