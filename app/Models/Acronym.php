<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acronym extends Model
{
    protected $fillable = [
        'user_id',
        'acronym',
        'expansion',
        'definition'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }


}
