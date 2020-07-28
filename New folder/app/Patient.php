<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $table = "patients";

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    
}
