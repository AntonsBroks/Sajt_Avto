<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function cars() { // FK relationship         
        return $this->hasOne('App\Car');     
    } 
}
