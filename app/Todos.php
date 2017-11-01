<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    public static function notComplete($query){
       return static::where('complete',0)->get();
        //return $query->where('complete',0);
    }
    public static function isComplete(){
        return static::where('complete',1)->get();
        //return $query->where('complete', 1)
    }

}
