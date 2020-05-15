<?php

namespace App;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   protected $guarded = [];
   protected $cast = [
       'order_details' => 'array'
   ];

   public function restaurant()
   {
       return $this->belongsTo(Restaurant::class,'resto_id');

   }
}
