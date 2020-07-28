<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    //
    protected $table = "doctors";

    public function doctors()
    {
        return $this->belongsTo('App\Doctors','idDoctor','id');
    }
}
