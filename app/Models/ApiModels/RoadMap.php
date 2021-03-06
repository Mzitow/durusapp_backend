<?php

namespace App\Models\ApiModels;

use Illuminate\Database\Eloquent\Model;

class RoadMap extends Model
{    protected $dates =['deleted_at'];
     
      protected $hidden =['created_at','deleted_at','updated_at'];
      
    protected $fillable=['fk_scholar_id','roadmap_text'];
}
