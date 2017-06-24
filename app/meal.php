<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meal extends Model
{
    protected $fillable=['name'];

    public function user(){
        return $this->blongsTo(User::class);
    }

    public function foods(){
        return $this->hasMany(Food::class);
    }
}
