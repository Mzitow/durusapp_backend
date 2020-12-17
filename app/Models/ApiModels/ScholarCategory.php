<?php

namespace App\Models\ApiModels;

use Illuminate\Database\Eloquent\Model;

class ScholarCategory extends Model
{  
    
     protected $dates =['deleted_at'];
     
      protected $hidden =['created_at','deleted_at','updated_at'];
      
      
    protected $fillable=['scholar_id','category_id'];
}
