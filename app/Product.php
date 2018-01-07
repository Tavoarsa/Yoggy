<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table ='products';
   protected $fillable = [
        'product_code','providers_id','categories_id', 'product_name', 'quatity','purchase_price','sale_price','discout','reorder_level','picture'];
    protected $guarded = ['id'];
}
