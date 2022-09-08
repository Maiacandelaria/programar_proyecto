<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Observation extends Model
{
    use HasFactory;
    
    protected $filable = ['body', 'course_id'];

    //Relacion Course  Observation UNO A UNO INVERSA
    public function course(){
         return $this->belongsTo('App\Models\Course');
    }
}
