<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = 'orders';
    protected $fillable = [
        'name','email','phone','subject','freight_type','city_of_departure','delivery_city','incoterms','weight','width','height','size'
    ];
    

}
