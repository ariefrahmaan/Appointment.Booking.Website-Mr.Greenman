<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'start_time', 'confirmed', 'reserved_at',
        'users_id', 'transaction_status', 'username',
        'email', 'nohp',
    ];

    protected $hidden = [

    ];

    public function user(){
        return $this->belongsTo( User::class, 'users_id', 'id' );
    }

}
