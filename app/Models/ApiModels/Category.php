<?php

namespace App\Models\ApiModels;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
      protected $dates =['deleted_at'];
     
      protected $hidden =['created_at','deleted_at','updated_at'];
      
    protected $fillable=['category_name','parent_id'];
}
