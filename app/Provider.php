<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
   protected $table ='providers';
   protected $fillable = [
        'supplier_name','contact_name','supplier_position', 'address', 'postal_code','city','phone','status','way_pay','notes','email'
    ];
    protected $guarded = ['id'];
}
