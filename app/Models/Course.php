<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'status'];
    protected $withCount = ['students', 'reviews']; //withCount nos trae la cantidad de registro que tiene la tabla students

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    public function getRatingAttribute(){
        if ($this->reviews_count) {
            return round($this->reviews->avg('rating'), 1); // redondeamos con round en 1 decimal
        }else{
            return 5;
        }

    }

    public function getRouteKeyName()
    {
        return "slug";
    }

    // query scopes consulta para que no se ejecute cuando no hay ningun registro en la bbdd

    public function scopeCategory($query, $category_id){
            if ($category_id) {
                return $query->where('category_id', $category_id);
            }
    }

    public function scopeLevel($query, $level_id){
        if ($level_id) {
            return $query->where('level_id', $level_id);
        }
    }

    //Relacion observation hasMany =  UNO a UNO

    public function observation(){
        return $this->hasMany('App\Models\Observation');
    }


    //Relacion uno a muchos

    public function reviews(){
        return $this->hasMany('App\Models\Review');
    }

    public function requirements(){
        return $this->hasMany('App\Models\Requirement');
    }

    public function goals(){
        return $this->hasMany('App\Models\Goal');
    }

    public function audiences(){
        return $this->hasMany('App\Models\Audience');
    }

    public function sections(){
        return $this->hasMany('App\Models\Section');
    }

    //Relacion uno a muchos inversa
    public function teacher(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    
    public function level(){
        return $this->belongsTo('App\Models\Level');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
    //Relacion muchos a muchos
    public function students(){
        return $this->belongsToMany('App\Models\User');
    }

    //Relacion uno a uno polimorfica

    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    //Relacion hasManyThrough
    public function lessons(){
        return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    }
}
