<?php

namespace App\Models\ApiModels;

use Illuminate\Database\Eloquent\Model;

class ShortMessege extends Model
{
     protected $dates =['deleted_at'];
     
      protected $hidden =['created_at','deleted_at','updated_at'];
      
      
    protected $fillable=['scholar_id','messege_type','messege_content'];
}
