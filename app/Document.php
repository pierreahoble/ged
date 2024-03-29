<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
     protected $fillable = [
        'numRef', 'titreDocuemnt','idType',
        'iduser','nomDocument','description',
        'titre','supprimer','date_doc'
    ];
    


    public function type()
    {
            return $this->hasOne('App\Type', 'id', 'idType');
        
    }



}
