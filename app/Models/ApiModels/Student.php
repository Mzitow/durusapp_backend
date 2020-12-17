<?php

namespace App\Models\ApiModels;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
     protected $dates =['deleted_at'];
     
      protected $hidden =['created_at','deleted_at','updated_at','country_id','field_id'];
      
    protected $fillable=['user_id','name','gender','country_id','field_id'];
    
    protected $appends =['country_name','field_name'];
     
     public function getCountryNameAttribute(){
         
        return $this->country()->first()->country_name;
        
     }
     
       public function getFieldNameAttribute(){
         
        return $this->field()->first()->field_name;
        
     }
    
    public function country()
    {
        return $this->belongsTo(Country::class,'country_id');
    }

    public function field()
    {
        return $this->belongsTo(Field::class,'field_id');
    }
    
}
