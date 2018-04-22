<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progresses_of_video extends Model
{
        public function base_course() {
            return $this->belongsTo(Video_time::class, 'base_course_id');
     
}

public function youtube() {
            return $this->belongsTo(Video_name::class, 'id_base');
     
}

}
