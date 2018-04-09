<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    public function base_course() {
    return $this->belongsTo(Base_course::class);
     
}

}
