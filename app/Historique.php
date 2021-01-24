<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    protected $fillable = [
        'idUser', 'action',
    ];


    
        public function user()
        {
            return $this->hasOne('App\User', 'id', 'idUser');
        }
   
}
