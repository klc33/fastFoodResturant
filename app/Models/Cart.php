<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';

    protected $primarykey = 'id';

    protected $fillable = ['user_id','food_id','quantity'];

    public function cart(){
        return $this->belongsTo(User::class);
    }
 

   
}
