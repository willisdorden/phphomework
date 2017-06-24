<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    protected $fillable = ['meal_name','protein','Carbohydrates', 'fat'];

    public function meal(){
        return $this->belongsTo(meal::class);
    }

}
