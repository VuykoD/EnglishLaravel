<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Base_course extends Model
{
    public function progress() {
     $this->belongsTo('App\Progress');
     dd($this);
}

}
