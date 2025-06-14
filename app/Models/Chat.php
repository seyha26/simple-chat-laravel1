<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Message;

class Chat extends Model
{
    protected $fillable = [
        'sender_id',
        'reciever_id',
        'type'
    ];

    public function message() {
        return $this->hasMany(Message::class);
    }
}
