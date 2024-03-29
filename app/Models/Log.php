<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'rfid',
        'access_granted',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'rfid', 'tag_id');
    }


}
