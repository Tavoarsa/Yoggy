<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
   protected $table ='categories';
   protected $fillable = [
        'category_name','descrition','tag','picture'];
   protected $guarded = ['id'];
}