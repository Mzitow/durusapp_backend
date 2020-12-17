<?php

namespace App\Models\ApiModels;

use Illuminate\Database\Eloquent\Model;

class Scholar extends Model
{   protected $dates =['deleted_at'];
     
      protected $hidden =['created_at','deleted_at','updated_at'];
      
    protected $fillable=['user_id','title','name','gender','active',
'country_id','address'];
}
