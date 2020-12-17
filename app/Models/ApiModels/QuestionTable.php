<?php

namespace App\Models\ApiModels;

use Illuminate\Database\Eloquent\Model;

class QuestionTable extends Model
{
     protected $dates =['deleted_at'];
     
      protected $hidden =['created_at','deleted_at','updated_at'];
      
   protected  $fillable=[
   	'fk_student_id','fk_scholar_id','fk_lesson_id','answer'];
}
