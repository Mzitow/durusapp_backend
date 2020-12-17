<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     
      protected $dates =['deleted_at'];
     
      protected $hidden =['created_at','deleted_at','updated_at','password','remember_token','email','active','gender'];
      
    protected $fillable = [
        'usergroup_id','user_name','password','phone_number',
        'active','email','gender'
    ];
    
    public static $rules = [
        'usergroup_id' => ['required'],
        'user_name' => ['required','unique:users'],
        'phone_number' => ['required']
        
    ];

    public static $customMessages = [
        'usergroup_id.required' => ' النوع المستخدم مطلوب',
        'user_name.unique' => ' هناك بنفس اسم المستخدم',
        'phone_number.required' => 'الرقم الهاتف مطلوب',
       
    ];
   //public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   // protected $hidden = [
       
       // 'password',
       // 'remember_token',
   // ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
