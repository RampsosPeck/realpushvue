<?php

namespace Realpushvue;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['message', 'user_id'];

    /*Un usuario podra mandar muchos mensajes*/
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
