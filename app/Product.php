<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','slug','price','description','details','shipping_cost','category_id','brand_id','image_path'];
}
